<?php 
namespace App\Classes;

    class Candidate extends Member {

        public function __construct($id, $name, $email, $password)  {
            parent::__construct($id, $name, $email, $password); 
        }


    }
?>