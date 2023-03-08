<?php

    class DtoUser{

        private $username;
        private $password;
        private $email;
        private $cellphone;

        public function __construct($username,$password,$email,$cellphone){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->cellphone = $cellphone;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getCellphone() {
            return $this->cellphone;
        }

    }
?>