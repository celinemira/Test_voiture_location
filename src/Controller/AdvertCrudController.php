<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdvertCrudController extends AbstractController
{
    #[Route('/new_advert', name: 'app_advert_crud')]
    public function index(): Response
    {
        return $this->render('advert_crud/index.html.twig', [
            'controller_name' => 'AdvertCrudController',
        ]);
    }
}
