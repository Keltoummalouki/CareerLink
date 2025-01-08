<?php 
namespace App\Classes;

    class Offer {
        private $id;
        private $title;
        private $salary;
        private $location;

        public function __construct($id,$title,$salary,$location){
            $this->id = $id;
            $this->title = $title;
            $this->salary = $salary;
            $this->location = $location;
        }

        public function getId(){
            return $this->id;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getSalary(){
            return $this->title;
        }

        public function getLocation(){
            return $this->location;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function setSalary($salary){
            $this->salary = $salary;
        }

        public function setLocation($location){
            $this->location = $location;
        }
        
    }
?>