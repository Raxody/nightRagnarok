<?php
    class Database{
        private $host = "localhost";
        private $databaseName = "nigthragnarok"; 
        private $user = "root"; 
        private $password = "";

        public function conection(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->databaseName,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $pdoException){
                return $pdoException->getMessage();
            }
        }
    }
?>