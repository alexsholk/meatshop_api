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
    const FILEPATH = __DIR__ . '/../../../data/json/products.json';

    private $data;

    public function __construct()
    {
        $this->data = json_decode(file_get_contents(self::FILEPATH), true);
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