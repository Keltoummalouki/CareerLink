<?php 

    namespace App\Classes;

    class Admin extends Member {
        
        public function __construct($id, $name, $email, $password)  {
            parent::__construct($id, $name, $email, $password); 
        }

    }
?>