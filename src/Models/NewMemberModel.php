<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Member;
use App\Config\DatabaseConnection;
// use App\sessionService\AuthSession;
use PDOException;
use PDO;

class NewMemberModel {
    private $connexion;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->connexion = $db->connect();
    }

    public function addMember($name, $email, $roleId, $password) {
        try {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO member (name, email,role_id, password  )
                        VALUES (:name, :email, :role, :password);";
            
            

            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':role', $roleId);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();

            return $this->connexion->lastInsertId();
        } catch (PDOException $e) {
            return null; 
        }
    }
}
