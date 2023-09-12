<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'page_home')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
