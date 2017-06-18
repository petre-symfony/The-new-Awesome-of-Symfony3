<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;


class LittleKernel extends Kernel {
  use  MicroKernelTrait;
  
  public function registerBundles() {
    
  }
  
  protected function configureRoutes(RouteCollectionBuilder $routes) {
    
  }
  
  protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader) {
    
  }

  

  

}
