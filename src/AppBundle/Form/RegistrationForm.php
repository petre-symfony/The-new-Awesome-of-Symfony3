<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationForm extends AbstractType{
  public function buildForm(FormBuilderInterface $builder, array $options) {
    
  }
  
  public function configureOptions(OptionsResolver $resolver) {
    
  }
  
  public function getName(){
    return 'app_bundle_registration_form';  
  }
}

