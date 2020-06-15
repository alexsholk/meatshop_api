<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        if ($categoryId = $request->query->get('category_id')) {
            foreach ($this->data as $product) {
                if ($product['category_id'] == $categoryId) {
                    $data[] = $product;
                }
            }
        } else {
            $data = $this->data;
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
}