<?php

    class DtoClient{

        private $id;
        private $name;
        private $address;
        private $addressSpecification;
        private $username;
        private $typeId;

        public function __construct($id,$name,$address,$addressSpecification,$username,$typeId){
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->addressSpecification = $addressSpecification;
            $this->username = $username;
            $this->typeId = $typeId;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getAddress() {
            return $this->address;
        }
        public function getAddressSpecification() {
            return $this->addressSpecification;
        }
        public function getTypeId() {
            return $this->typeId;
        }

    }

?>
