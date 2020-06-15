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
                if ($staticPage['data']['slug'] == $slug) {
                    $data[] = $staticPage;
                }
            }
        } else {
            $data = $this->data;
        }

        return new JsonResponse($data, Response::HTTP_OK);
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

        return new JsonResponse($data, $data ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }
}