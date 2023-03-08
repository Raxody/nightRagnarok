<?php
    class CreateAccountService{
        private $PDO;
        public function __construct(){
            require_once("C:/xampp/htdocs/nigthRagnarok/config/dabatase.php");
            $database = new Database();
            $this->PDO = $database->conection();
        }

        public function addUserClient($user){
            $statment = $this->PDO->prepare(
                "INSERT INTO user (userName, password, email, cellphone, typeUser)
                             VALUES (:nameNewUser, :passwordNewUser, :emailAddressNewUser,:cellPhoneNewUser, 'CLIENTE')");

            $statment->bindParam(":nameNewUser",$user->getUsername());
            $statment->bindParam(":passwordNewUser",$user->getPassword());
            $statment->bindParam(":emailAddressNewUser",$user->getEmail());
            $statment->bindParam(":cellPhoneNewUser",$user->getCellphone());

            return ($statment->execute()) ? $this->PDO->lastInsertId(): false;
        }

        public function addClient($client){
            $statment = $this->PDO->prepare(
                "INSERT INTO customer (id, name, address, addressSpecification, userName, typeId)
                VALUES (:idClient, :nameClient, :addressClient, :addressSpecificationClient, :userNameClient, :typeIdClient);");
                
            $statment->bindParam(":idClient",$client->getId());
            $statment->bindParam(":nameClient",$client->getName());
            $statment->bindParam(":addressClient",$client->getAddress());
            $statment->bindParam(":addressSpecificationClient",$client->getAddressSpecification());
            $statment->bindParam(":userNameClient",$client->getuserName());
            $statment->bindParam(":typeIdClient",$client->getTypeId());

            return ($statment->execute()) ? $this->PDO->lastInsertId(): false;
        }

        
        
    }
?>