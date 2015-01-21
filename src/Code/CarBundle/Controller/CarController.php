<?php

namespace Code\CarBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarController extends Controller
{
    /**
     * @Route("/index")
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $marcas = ['GM/Chevrolet', 'Honda', 'Jac Motors', 'Lifan', 'Nissan', 'Peugeot', 'Volkswagen'];
        $modelos = ['Cobalt', 'Astra Sedan', 'City', 'J3 Turin', '530', 'Tiida Sedan', '207 Sedan', 'Polo Sedan'];

        return [
            'marcas' => $marcas,
            'modelos' => $modelos,
        ];
    }
}
