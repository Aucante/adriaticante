<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VueController extends AbstractController
{

    /**
     * @Route("/", name="vue")
     * @Route("/{route}", requirements={"route"=".*"}, name="vue")
     */
    public function index(): Response
    {

        return $this->render('vue/index.html.twig', [
            'controller_name' => 'VueController',
        ]);
    }
}
