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
            'page_name' => "Ressources"
        ]);
    }

    #[Route('/ressources/view/{route}/{subRouting}', name: 'indexView')]
    public function indexView($route = null, $subRouting = null): Response
    {
        if(isset($route) && !isset($subRouting)){
            return $this->render('ressources/view/overview.html.twig', [
                'page_name' => $route
            ]);
        } elseif(isset($route) && isset($subRouting)){
            return $this->render('ressources/view/'.$subRouting.'.html.twig', [
                'page_name' => $route." ".$subRouting
            ]);
        } else{
            return new RedirectResponse("/ressources");
        }

    }


}
