<?php
namespace App\Config;

// require_once '../../vendor/autoload.php';

use Dotenv\Dotenv;
use PDO;
use PDOException;

class DatabaseConnection{
    private $connexion;


    public function connect()
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        try {
            $this->connexion = new PDO("mysql:host=".$_ENV["LOCALHOST"].";dbname=".$_ENV["DATABASE"],$_ENV["USER"],$_ENV["USER_PASSWORD"]);
            return $this->connexion;
        } catch (PDOException $th) {
            die("connexion faild".$th->getMessage());
        }
    }
}