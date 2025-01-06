<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Member;
use App\Config\DatabaseConnection;
use PDOException;
use PDO;

class NewMemberModel {
    private $connexion;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->connexion = $db->connect();
    }

    public function addMember($name, $email, $role, $password) {
        try {
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO member (name, email, password, role_id )
                    VALUES (:name, :email, :password, :role);";

            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();

            return $this->connexion->lastInsertId();
        } catch (PDOException $e) {
            return null; 
        }
    }
}
