<?php

namespace App\Controller\Api;

use App\Model\Product;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/orders")
 */
class OrderController
{
    const ORDER_LOG_PATH = __DIR__ . '/../../../data/orders/';
    const ORDER_RECIPIENT_EMAIL = 'miloveat@mail.ru';

    /**
     * @Route("", methods={"POST"})
     */
    public function create(Request $request, MailerInterface $mailer)
    {
        $rawContent = $request->getContent(false);

        // Log order
        $this->logOrderRawContent($rawContent);
        // Send email
        $this->sendOrderEmail(json_decode($rawContent, true), $mailer);

        return new JsonResponse(null, Response::HTTP_OK);
    }

    private function logOrderRawContent(string $rawContent)
    {
        $filename = date('Y_m_d_H_i') . '.json';
        file_put_contents(
            self::ORDER_LOG_PATH . $filename,
            $rawContent
        );
    }

    private function sendOrderEmail(array $data, MailerInterface $mailer)
    {
        // Convert $data to Products
        $products = [];
        $totalCost = 0;
        foreach ($data['cart'] as $row) {
            $products[] = $product = Product::createFromArray($row);
            $totalCost += $product->getTotalCost();
        }

        $form = $data['form'];
        $phone = sprintf("+7 (%s) %s-%s-%s",
            substr($form['phone'], 0, 3),
            substr($form['phone'], 3, 3),
            substr($form['phone'], 6, 2),
            substr($form['phone'], 8)
        );

        $address = join(', ', array_filter($form['address']));

        $deliveryDate = new \DateTime();
        switch ($form['delivery']['day']) {
            case 'Завтра':
                $deliveryDate->add(new \DateInterval("P1D"));
                break;
            case 'Послезавтра':
                $deliveryDate->add(new \DateInterval("P2D"));
                break;
        }
        $deliveryDate = $deliveryDate->format('d.m.Y');

        // Email to admin
        $mail = (new TemplatedEmail())
            ->from('shop@miloveat.ru')
            ->to(self::ORDER_RECIPIENT_EMAIL)
            ->bcc('alexsholk@yandex.by')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Заказ на сумму ' . $totalCost . " ₽")
            ->htmlTemplate('emails/order.html.twig')
            ->context([
                'products' => $products,
                'totalCost' => $totalCost,
                'form' => $form,
                'phone' => $phone,
                'address' => $address,
                'deliveryDate' => $deliveryDate,
            ]);

        $mailer->send($mail);

        // Email to client
        if (!empty($form['email'])) {
            $mail = (new TemplatedEmail())
                ->from('shop@miloveat.ru')
                ->to($form['email'])
                ->priority(Email::PRIORITY_HIGH)
                ->subject('Заказ на сумму ' . $totalCost . " ₽")
                ->htmlTemplate('emails/order.html.twig')
                ->context([
                    'products' => $products,
                    'totalCost' => $totalCost,
                    'form' => $form,
                    'phone' => $phone,
                    'address' => $address,
                    'deliveryDate' => $deliveryDate,
                ]);

            $mailer->send($mail);
        }
    }
}