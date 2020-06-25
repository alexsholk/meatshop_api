<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories")
 */
class CategoryController
{
    const FILEPATH = __DIR__ . '/../../../data/json/categories.json';

    /**
     * @Route("", methods={"GET"})
     */
    public function list()
    {
        return new Response(file_get_contents(self::FILEPATH), Response::HTTP_OK);
    }
}