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
    const ORDER_RECIPIENT_EMAIL = 'alexsholk@yandex.by';

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
        $mail = (new TemplatedEmail())
            ->from('shop@miloveat.ru')
            ->to(self::ORDER_RECIPIENT_EMAIL)
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Заказ')
            ->htmlTemplate('emails/order.html.twig')
            ->context([
                'cart' => json_encode($data['cart'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
                'form' => json_encode($data['form'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
            ]);

        $mailer->send($mail);
    }

    /**
     * @Route("/test", methods={"GET"})
     */
    public function test(MailerInterface $mailer)
    {
        $data = json_decode(file_get_contents(self::ORDER_LOG_PATH . '2020_07_05_03_12.json'), true);

        $product = Product::createFromArray($data['cart'][0]);

        dump($product);
        die;

        //$this->sendOrderEmail($data, $mailer);

        return new JsonResponse('OK', Response::HTTP_OK);
    }
}