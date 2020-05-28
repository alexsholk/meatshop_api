<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product-addons")
 */
class ProductAddonsController
{
    private $data;

    public function __construct()
    {
        $this->data = require __DIR__ . '/../../../data/product-addons.php';
    }

    /**
     * @Route("", methods={"GET"})
     */
    public function list()
    {
        $response = new JsonResponse($this->data, Response::HTTP_OK);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}