<?php

namespace App\Controller\Api;

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
    /**
     * @Route("", methods={"POST"})
     */
    public function create(Request $request, MailerInterface $mailer)
    {
        $data = json_decode($request->getContent(false), true);


        $mail = (new TemplatedEmail())
            ->from('order@miloveat.ru')
            ->to('alexsholk@yandex.by')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Заказ')
            ->htmlTemplate('emails/order.html.twig')
            ->context([
                'cart' => $data['cart'],
                'form' => $data['form'],
            ]);

        $mailer->send($mail);

        $filename = date('Y_m_d_H_i') . '.json';

        file_put_contents(
            __DIR__ . '/../../../data/orders/' . $filename,
            $request->getContent(false)
        );
        return new JsonResponse(null, Response::HTTP_OK);
    }
}