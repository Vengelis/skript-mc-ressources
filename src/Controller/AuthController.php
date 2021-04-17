<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/auth')]
class AuthController extends AbstractController
{
    #[Route('/login', name: 'auth:login')]
    public function login(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry->getClient('invision')->redirect([], []);
    }
}