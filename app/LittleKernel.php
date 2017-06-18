<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;


class LittleKernel extends Kernel {
  use  MicroKernelTrait;
  
  public function registerBundles() {
   return [
     new FrameworkBundle()
   ];  
  }
  
  public function helloSymfony($version){
    return new Response('Hi Symfony version '. $version);  
  }
  
  protected function configureRoutes(RouteCollectionBuilder $routes) {
    $routes->add('/hello/symfony/{version}', 'kernel:helloSymfony');  
  }
  
  protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader) {
    $c->loadFromExtension('framework', [
      'secret' => 'micro'
    ]);
  }

  

  

}
