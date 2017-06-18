<?php
namespace AppBundle\Security;

use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class UserVoter extends Voter{
  protected function supports($attribute, $subject) {
    
  }

  protected function voteOnAttribute($attribute, $subject, TokenInterface $token) {
    
  }

//put your code here
}
