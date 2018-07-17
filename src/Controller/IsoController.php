<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IsoController extends Controller
{
    /**
     * @Route("/iso", name="iso")
     */
    public function index()
    {
        return $this->render('iso/index.html.twig', [
            'controller_name' => 'IsoController',
        ]);
    }
}
