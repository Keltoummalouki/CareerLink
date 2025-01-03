<?php 

    namespace App\Classes;
    class AuthManager {
        private $session;

        public function __construct(SessionManager $session) {
            $this->session = $session;
        }
        // kiStocker db f session
        public function login($memberId, $role) {
            $this->session->set('member_id', $memberId);
            $this->session->set('member_role', $role);
        }

        public function logout() {
            $this->session->destroy(); //deduire 
        }

        public function isAuthenticated() {
            return $this->session->has('member_id'); //verififie wach rah mconnecter
        }

        public function getMemberRole() {
            return $this->session->get('member_role'); //role dyalo
        }

        public function isAuthorized($requiredRole) {
            $memberRole = $this->getMemberRole();
            return $memberRole === $requiredRole; //comparer l role
        }
    }