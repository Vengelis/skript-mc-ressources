<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/ressource', name: 'ressource')]
    public function redirectIndex(): Response
    {
        return new RedirectResponse("/ressources");
    }

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return new RedirectResponse("/ressources");
    }

    #[Route('/ressources', name: 'ressources')]
    public function index(): Response
    {
        return $this->render('ressources/index.html.twig', [

        ]);
    }


}
