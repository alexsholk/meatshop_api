<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/products")
 */
class ProductController
{
    private $data;

    public function __construct()
    {
        $this->data = require __DIR__ . '/../../../data/catalog.php';
    }

    /**
     * @Route("", methods={"GET"})
     */
    public function list(Request $request)
    {
        $categoryId = $request->query->get('categoryId');

        $data = array_values(array_filter($this->data['products'], function ($product) use ($categoryId) {
            return $categoryId ? $product['categoryId'] == $categoryId : true;
        }));

        $response = new JsonResponse($data);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}