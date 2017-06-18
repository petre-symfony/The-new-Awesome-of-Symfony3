<?php
namespace AppBundle\Security;

use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use AppBundle\Entity\User;

class UserVoter extends Voter{
  protected function supports($attribute, $object) {
    if ($attribute != 'USER_VIEW'){
      return false;
    }
    
    if (!$object instanceof User){
      return FALSE;
    }
    
    return true;
  }

  protected function voteOnAttribute($attribute, $subject, TokenInterface $token) {
    
  }

//put your code here
}
