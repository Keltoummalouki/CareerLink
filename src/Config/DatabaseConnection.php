<?php

namespace App\Config;

use \PDO;
use \PDOException;

class DatabaseConnection
{
    private $host="localhost";
    private $dbname="CareerLink";
    private $user="root";
    private $pass="";
    private $connexion;

    public function connect() {
      try {
        $this->connexion = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass  );
        // echo "Connexion réussie !";
        return $this->connexion;
      }
      catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
      }
    }
}
?>