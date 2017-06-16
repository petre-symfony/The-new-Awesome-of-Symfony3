<?php
namespace AppBundle\Security;

use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class WeirdFormLoginAuthenticator extends AbstractGuardAuthenticator{
  public function checkCredentials($credentials, UserInterface $user) {
    
  }

  public function getCredentials(Request $request) {
    
  }

  public function getUser($credentials, UserProviderInterface $userProvider) {
    
  }

  public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
    
  }

  public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey) {
    
  }

  public function start(Request $request, AuthenticationException $authException = null) {
    
  }

  public function supportsRememberMe() {
    
  }

}
