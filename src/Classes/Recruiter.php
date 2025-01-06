<?php 
namespace App\Classes;
    class Recruiter extends Member {
        
        public function __construct($id, $name, $email, $password)  {
            parent::__construct($id, $name, $email, $password); 
        }



    }
?>