<?php
namespace App\Controllers;

use App\Classes\Member;
use App\Classes\Role;
use App\Config\DatabaseConnection;
use App\Models\MemberModel;
use App\Models\NewMemberModel;
use App\Controllers\SessionController;
use PDO;

class AuthController{
    
    public function login($email, $password){

        $session = new SessionController();


        $memberModel = new MemberModel();
        $member = $memberModel->findMember($email, $password);
        if($member == null)
        {
            echo "member not found please check ...";
        }
        else{

            $session->set('user', $member);

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
     
    public function register($name, $email, $role, $password){

        // $session = new SessionController();

        $newMemberModel = new NewMemberMode();
        $newMember = $newMemberModel->addMember($name, $email, $role,$password);

        if($newMember !== null){

            $session->set('user', $newMember);

            if($newMember->getRole()->getName() == "2")
            {
              header("Location: ../recruiter/home.php");
            }
            else if($newMember->getRole()->getName() == "3")
            {
              header("Location: ../candidate/home.php");
            }
        }
    }
}