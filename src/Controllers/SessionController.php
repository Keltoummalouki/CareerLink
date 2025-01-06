<?php 

    namespace App\Controllers;
    
    class SessionController {
        public function __construct(){
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }

        public function set($key, $value) {
            $_SESSION[$key] = $value;
        }

        public function get($key) {
            return isset($_SESSION[$key]); //verification
        }

        public function destroy() {
            session_destroy(); //detruire
            $_SESSION = [];
        }
    }