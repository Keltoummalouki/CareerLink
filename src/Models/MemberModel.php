<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Member;
use App\Config\DatabaseConnection;
use PDOException;
use PDO;

class MemberModel{
    private $connexion;

    public function __construct() {
            $db = new DatabaseConnection();
            $this->connexion = $db->connect();
    }

    public function findMember($email, $password) {
        $query = "SELECT member.id, member.name,member.email, member.password, role.id as role_id, role.name as role_name
                  FROM member 
                  JOIN `role` ON role.id = member.role_id 
                  WHERE member.email = :email";

        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
 
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':email', $email);

            $stmt->execute();
    
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $passwordDb = $row['password'];

            $verfiy = password_verify($password, $passwordDb);

            if(!$verfiy){
                return null;
            }
            else{

                $role = new Role($row["role_id"], $row["role_name"]);
                return new Member($row['id'],$row["name"],$row["email"],$role,$row["password"]);

            }
    }
    
}