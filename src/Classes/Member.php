<?php 
namespace App\Classes;

    class Member {
        protected $id;
        protected $name;
        protected $email;
        protected $role;
        protected $password;


        public function __construct($id,$name,$email,$role,$password){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->role = $role;
            $this->password = $password;
        }

        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getRole(){
            return $this->role;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setRole($role){
            $this->role = $role;
        }

        public function setPassword($password){
            $this->password = $password;
        }
    }
?>