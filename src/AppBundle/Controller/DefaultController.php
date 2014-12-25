<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/run/{marca}/{modelo}", name="run")
     */
    public function runAction($marca, $modelo)
    {
        $marca = strtoupper($marca);
        $modelo = strtoupper($modelo);

        return $this->render('AppBundle:Default:run.html.twig', [
        		'marca' => $marca,
        		'modelo' => $modelo
        	]
    	);
    }
}
