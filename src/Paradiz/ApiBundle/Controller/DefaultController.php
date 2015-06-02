<?php

namespace Paradiz\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ParadizApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
