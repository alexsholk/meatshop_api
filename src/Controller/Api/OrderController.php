<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/orders")
 */
class OrderController
{
    /**
     * @Route("", methods={"POST"})
     */
    public function create(Request $request)
    {
        $filename = date('Y_m_d_H_i') . '.json';

        file_put_contents(
            __DIR__ . '/../../../data/orders/' . $filename,
            $request->getContent(false)
        );
        return new JsonResponse(null, Response::HTTP_OK);
    }
}