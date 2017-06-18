<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\RegistrationForm;

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

    return $this->render('default/login.html.twig', [
      'error' => $error
    ]);
  }

  /**
   * @Route("/logout", name="logout")
   */
  public function logoutAction(){
  }
  
  /**
   * @Route("/register", name="user_register")
   */
  public function registerAction(Request $request){
    $form = $this->createForm(RegistrationForm::class);
    
  }
}
