<?php
namespace App\Models;

use App\Config\DatabaseConnection;
use PDOException;

class CategoryModel {
    private $connexion;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->connexion = $db->connect();
    }

    public function addCategory($name) {
        try {

            $query = "INSERT INTO category (name)
                        VALUES (:name);";

            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->execute();

            return $this->connexion->lastInsertId();
        } catch (PDOException $e) {
            return null; 
        }
    }
}
