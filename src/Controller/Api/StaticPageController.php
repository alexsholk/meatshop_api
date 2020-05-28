<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/static-pages")
 */
class StaticPageController
{
    private $data;

    public function __construct()
    {
        $this->data = require __DIR__ . '/../../../data/static-pages.php';
    }

    /**
     * @Route("", methods={"GET"})
     */
    public function list(Request $request)
    {
        $data = [];

        if ($slug = $request->query->get('slug')) {
            foreach ($this->data as $staticPage) {
                if ($staticPage['slug'] == $slug) {
                    $data[] = $staticPage;
                }
            }
        } else {
            $data = $this->data;
        }

        $response = new JsonResponse($data, Response::HTTP_OK);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    /**
     * @Route("/{id}", methods={"GET"})
     */
    public function get($id)
    {
        $data = null;

        foreach ($this->data as $staticPage) {
            if ($staticPage['id'] == $id) {
                $data = $staticPage;
                break;
            }
        }

        $response = new JsonResponse($data, $data ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}