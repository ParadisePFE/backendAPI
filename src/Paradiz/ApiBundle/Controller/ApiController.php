<?php
/**
 * Created by PhpStorm.
 * User: yasenhaji
 * Date: 01/06/2015
 * Time: 13:24
 */

namespace Paradiz\ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/api", name="homepage")
 */
class ApiController extends Controller{
    /**
     * @Route("/articles", name="api_articles")
     */
    public function articlesAction(){
        $articles = array('article1', 'article2', 'article3');
        return new JsonResponse($articles);
    }

    /**
     * @Route("/user", name="api_user")
     */
    public function userAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user) {
            return new JsonResponse(array(
                'id' => $user->getId(),
                'username' => $user->getUsername()
            ));
        }

        return new JsonResponse(array(
            'message' => 'User is not identified'
        ));

    }
}