<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories")
 */
class CategoryController
{
    private $data;

    public function __construct()
    {
        $this->data = require __DIR__ . '/../../../data/categories.php';
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