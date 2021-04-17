<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\OAuth2ClientInterface;
use KnpU\OAuth2ClientBundle\Security\Authenticator\SocialAuthenticator;
use League\OAuth2\Client\Token\AccessToken;
use Romitou\OAuth2\Client\InvisionResourceOwner;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class InvisionAuthenticator extends SocialAuthenticator
{
    use TargetPathTrait;

    private RouterInterface $router;
    private ClientRegistry $clientRegistry;
    private EntityManagerInterface $entityManager;

    public function __construct(RouterInterface $router, ClientRegistry $clientRegistry, EntityManagerInterface $entityManager)
    {
        $this->router = $router;
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        $this->saveTargetPath($request->getSession(), 'invision', $request->getRequestUri());
        return new RedirectResponse($this->router->generate('auth:login'));
    }

    public function supports(Request $request): bool
    {
        return $request->attributes->get('_route') === 'invision_authenticate';
    }

    public function getCredentials(Request $request): AccessToken
    {
        return $this->fetchAccessToken($this->getInvisionClient());
    }

    public function getInvisionClient(): OAuth2ClientInterface
    {
        return $this->clientRegistry->getClient('invision');
    }

    public function getUser($credentials, UserProviderInterface $userProvider): ?UserInterface
    {
        /** @var InvisionResourceOwner $resourceOwner */
        $resourceOwner = $this->getInvisionClient()
            ->fetchUserFromToken($credentials);

        /** @var User $user */
        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneByInvisionId($resourceOwner->getId());

        if ($user)
            return $user;

        $user = (new User())
            ->setInvisionId($resourceOwner->getId())
            ->setUsername($resourceOwner->getName())
            ->setForumProfileUrl($resourceOwner->getProfileUrl())
            ->setPrimaryGroupName($resourceOwner->getPrimaryGroup()?->getName())
            ->setMail($resourceOwner->getEmail());
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        // TODO: Make an error page
        return new RedirectResponse($this->router->generate(''));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey): ?Response
    {
        return new RedirectResponse($this->getTargetPath($request->getSession(), 'invision') ?? $this->router->generate('home'));
    }
}