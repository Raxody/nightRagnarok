<?php

    class DtoAlcoholicDrink{

        private $name;
        private $type;
        private $percentage;
        private $amount;
        private $price;

        public function __construct($name,$type,$percentage,$amount,$price){
            $this->name = $name;
            $this->type = $type;
            $this->percentage = $percentage;
            $this->amount = $amount;
            $this->price = $price;
        }

        public function getName() {
            return $this->name;
        }

        public function getType() {
            return $this->type;
        }

        public function getPercentage() {
            return $this->percentage;
        }

        public function getAmount() {
            return $this->amount;
        }

        public function getPrice() {
            return $this->price;
        }

    }


?>