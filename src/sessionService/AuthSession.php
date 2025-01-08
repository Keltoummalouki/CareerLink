<?php 

    namespace App\sessionService;
    
    class AuthSession {
        public function __construct() {
            if (session_status() === PHP_SESSION_NONE) {
                session_set_cookie_params([
                    'lifetime' => 0, // Expire à la fermeture du navigateur
                    'path' => '/', // Valable pour tout le site
                    'domain' => '', // Définir si nécessaire pour les sous-domaines
                    'secure' => isset($_SERVER['HTTPS']), // HTTPS uniquement
                    'httponly' => true, // Empêche l'accès JavaScript
                    'samesite' => 'Strict', // Protection CSRF
                ]);
                session_start();
            }
        }

        public function set($key, $value) {
            $_SESSION[$key] = $value;
        }

        public function get($key) {
            return $_SESSION[$key] ?? null; // verification
        }

        public function destroy() {
            session_destroy(); //detruire
            $_SESSION = [];
        }
    }