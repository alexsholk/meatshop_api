<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/static-page")
 */
class StaticPageController
{
    private const STATIC_PAGES = [
        [
            'id' => 'about',
            'title' => 'О нас',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid illum 
officiis repellat sed sit. Amet animi dolores ea eaque nulla officia pariatur perspiciatis quae recusandae sequi! 
Harum laborum quia reprehenderit!</p>'
        ],
        [
            'id' => 'delivery',
            'title' => 'Доставка',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt 
dicta ea excepturi exercitationem ipsum laudantium qui quos totam veniam. Ab adipisci atque dicta dolorem dolorum et 
exercitationem laborum minus, natus nesciunt nihil nostrum odio quae, quis similique ullam voluptatem. Voluptatem!</p>'
        ],
        [
            'id' => 'partnership',
            'title' => 'Юр. лицам и ИП',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam 
amet beatae doloribus, eveniet iste iure necessitatibus odio provident. Inventore, vero!</p>'
        ],
        [
            'id' => 'contacts',
            'title' => 'Контакты',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium 
architecto aspernatur at autem delectus et exercitationem facere hic ipsam, iste optio quaerat quod recusandae sit 
vero voluptas voluptatibus voluptatum?</p>'
        ],
        [
            'id' => 'payment-details',
            'title' => 'Реквизиты',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at, corporis, 
doloremque eligendi excepturi fugit necessitatibus pariatur porro quam, quasi quia quibusdam veniam? Ad aspernatur 
delectus dicta ea eligendi fugit molestiae nemo nihil non, provident quaerat quos recusandae repudiandae suscipit?</p>'
        ],
        [
            'id' => 'ua',
            'title' => 'Пользовательское соглашение',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore esse hic molestias 
recusandae voluptas voluptates!</p>'
        ],
        [
            'id' => 'pdpa',
            'title' => 'Соглашение на обработку персональных данных',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aspernatur blanditiis 
commodi consequuntur dolorum est ex expedita in mollitia, nemo nisi, optio totam unde. A adipisci aspernatur delectus, 
deleniti odit quaerat quas similique vero voluptatibus.</p>'
        ],
        [
            'id' => '404',
            'title' => 'Страница не найдена',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam 
amet beatae doloribus, eveniet iste iure necessitatibus odio provident. Inventore, vero!</p>'
        ],
    ];

    /**
     * @Route("", methods={"GET"})
     */
    public function list()
    {
        return new JsonResponse(self::STATIC_PAGES);
    }

    /**
     * @Route("/{id}", methods={"GET"})
     */
    public function get($id)
    {
        $data = null;
        foreach (self::STATIC_PAGES as $staticPage) {
            if ($staticPage['id'] === $id) {
                $data = $staticPage;
            }
        }

        $response = new JsonResponse($data);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}