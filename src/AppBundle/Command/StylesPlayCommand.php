<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class StylesPlayCommand extends ContainerAwareCommand{
  protected function configure() {
    $this->setName('styles:play');
  }
  
  protected function execute(InputInterface $input, OutputInterface $output) {
    $style = new SymfonyStyle($input, $output);
    $style->title('Welcome to SymfonyStyle!');
    $style->section('Wow, look at this text section');
    $style->text('Lorem Lipsum Dolor! Lorem Lipsum Dolor! Lorem Lipsum Dolor!');
    $style->note('More sure write some *real* text eventually');
    $style->comment('Lorem Lipsum is just latin garbage');
    $style->comment('Don\'t overuse it');
  }  
}
