<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request) {
    // replace this example code with whatever you need
    return $this->render('default/index.html.twig', array(
      'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
    ));
  }

  /**
   * @Route("/login", name="login")
   */
  public function sillyLoginAction() {
    $error = $this->get('security.authentication_utils')
      ->getLastAuthenticationError();
    
    dump($this->get('security.authentication_utils'));
    
    throw new \Exception('Something went wrong!');
    
    return $this->render('default/login.html.twig', [
      'error' => $error
    ]);
  }

  /**
   * @Route("/logout", name="logout")
   */
  public function logoutAction(){
  }
}
