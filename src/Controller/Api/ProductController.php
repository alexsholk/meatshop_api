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
        $this->data = require __DIR__ . '/../../../data/products.php';
    }

    /**
     * @Route("", methods={"GET"})
     */
    public function list(Request $request)
    {
        $data = [];
        if ($categoryId = $request->query->get('categoryId')) {
            foreach ($this->data as $product) {
                if ($product['categoryId'] == $categoryId) {
                    $data[] = $product;
                }
            }
        } else {
            $data = $this->data;
        }

        $response = new JsonResponse($data);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}