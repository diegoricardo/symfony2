<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/run/{marca}/{modelo}", name="run")
     * @Template()
     */
    public function runAction($marca, $modelo)
    {
        return [
            'marca' => $marca,
            'modelo' => $modelo,
        ];
    }

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }
}
