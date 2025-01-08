<?php
namespace App\Controllers;

use App\Classes\Member;
use App\Classes\Role;
use App\Config\DatabaseConnection;
use App\Models\MemberModel;
use App\Models\NewMemberModel;
use App\sessionService\AuthSession;
use PDO;

class AuthController{
    
    public function login($email, $password){


        $memberModel = new MemberModel();
        $member = $memberModel->findMember($email, $password);
        if($member !== null)
        {
          $session = new AuthSession();
          $session->set('id', $member->getId());
          $session->set('role', $member->getRole()->getName());
          $session->set('email', $member->getEmail());

            if($member->getRole()->getName() == "Admin")
            {
                header('Location: ../admin/dashboard.php');
                exit();
            }
            else if($member->getRole()->getName() == "Recruiter")
            {
              header("Location: ../recruiter/home.php");
              exit();
            }
            else if($member->getRole()->getName() == "Candidate")
            {
              header("Location: ../candidate/home.php");
              exit();
            }
        }
    }

    public function register($name, $email, $roleId, $password) {
      $newMember = new NewMemberModel();

      $result = $newMember->addMember($name, $email, $roleId, $password);

        switch($roleId) {

            case "2": 
                header("Location: ../recruiter/index.php");
                break;
            case "3":
                header("Location: ../candidate/index.php");
                break;
        }

  }
}