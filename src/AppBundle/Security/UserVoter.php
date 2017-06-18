<?php
namespace AppBundle\Security;

use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use AppBundle\Entity\User;
use AppBundle\Security\EvilSecurityRobot;

class UserVoter extends Voter{
  private $robot;
  
  public function __construct(EvilSecurityRobot $robot) {
    $this->robot = $robot;
  }

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
    return $this->robot->doesRobotAllowAccess();
  }


}
