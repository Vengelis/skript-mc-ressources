<?php

namespace App\Controller;

use mysql_xdevapi\Exception;
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

    #[Route('/ressources/send/{route}', name: 'sendRessources')]
    public function sendRessources($route = null): Response
    {
        if(!isset($route)){
            return $this->render('ressources/send/manager/nothing.html.twig', [
                'page_name' => "Selection du mode d'intégration"
            ]);
        } else {
            return $this->render('ressources/send/manager/'.$route.'.html.twig', [
                'page_name' => "Envoyer une ressource via ".$route
            ]);
        }

    }

    #[Route('/ressources/view/{route}/{subRouting}/{subModule}', name: 'indexView')]
    public function indexView($route = null, $subRouting = null, $subModule = null): Response
    {
        if(isset($route) && !isset($subRouting)){
            return $this->render('ressources/view/overview.html.twig', [
                'page_name' => $route
            ]);
        }elseif(isset($route) && isset($subRouting)){
            if(!isset($subModule)){
                return $this->render('ressources/view/'.$subRouting.'.html.twig', [
                    'page_name' => $route." ".$subRouting
                ]);
            } elseif($subRouting == "support") {
                return $this->render('ressources/view/support/view.html.twig', [
                    'page_name' => $route . " " . $subModule,
                    'ressource_id' => $subModule
                ]);
            }
        } else{
            return new RedirectResponse("/ressources");
        }
    }

}
