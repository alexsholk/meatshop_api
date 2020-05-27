<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories")
 */
class CategoryController
{
    private $data;

    public function __construct()
    {
        $this->data = require __DIR__ . '/../../../data/catalog.php';
    }

    /**
     * @Route("", methods={"GET"})
     */
    public function list()
    {
        $data = $this->data['categories'];
        $response = new JsonResponse($data);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}