<?php
namespace App\sessionService;

use App\sessionService\AuthSession;

class AuthMiddleware {
    private $session;

    public function __construct() {
        $this->session = new AuthSession();
    }

    public function requireAdmin() {
        if (!$this->session->get('id') || $this->session->get('role') !== "Admin") {
            header("Location: ../authentification/login.php");
            exit();
        }
    }

    public function requireLogin() {
        if (!$this->session->get('id')) {
            header("Location: ../authentification/login.php");
            exit();
        }
    }
}