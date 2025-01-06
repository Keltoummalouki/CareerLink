<?php
namespace App\Models;

use App\Config\DatabaseConnection;
use PDO;

class NewMemberModel {
    private $connexion;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->connexion = $db->connect();
    }

    public function addMember($name, $email, $role_id, $password) {
        $insert = "INSERT INTO member (name, email, password, role_id)
                    VALUES (:name, :email, :password, :role_id);";

        $stmt = $this->connexion->prepare($insert);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':role_id', $role_id);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $newMember = $this->connexion->lastInsertId();
            return $newMember;
        } else {
            return null; 
        }
    }
}
