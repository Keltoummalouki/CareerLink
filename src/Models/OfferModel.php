<?php
namespace App\Models;

use App\Config\DatabaseConnection;
use PDOException;

class OfferModel {
    private $connexion;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->connexion = $db->connect();
    }


    public function addOffer($name,$title,$salary,$location,$caregory) {
        try {

            $query = "INSERT INTO offer (name,title,salary,`location`,caregory)
                        VALUES (:name,:title,:salary,:location,:caregory);";

            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':salary', $salary);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':category', $category);
            $stmt->execute();

            return $this->connexion->lastInsertId();
        } catch (PDOException $e) {
            return null; 
        }
    }
}
