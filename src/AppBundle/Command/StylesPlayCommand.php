<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StylesPlayCommand extends ContainerAwareCommand{
  protected function configure() {
    $this->setName('styles:play');
  }
  
  protected function execute(InputInterface $input, OutputInterface $output) {
    $output->writeln('boring...');
  }  
}
