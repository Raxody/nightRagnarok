<?php
    class AlcoholicDrinkService{
        private $PDO;
        public function __construct(){
            require_once("C:/xampp/htdocs/nigthRagnarok/config/dabatase.php");
            $database = new Database();
            $this->PDO = $database->conection();
        }

        public function addAlcoholicDrink($alcoholicDrink){
            $statment = $this->PDO->prepare(
                "INSERT INTO 
                    alcoholicdrink 
                        (nameAlcoholicDrink, kind, alcoholPercentage, amount, price)
                             VALUES(:nameDrink,:typeDrink,:percentageDrink,:amount,:price)");
            $statment->bindParam(":nameDrink",$alcoholicDrink->getName());
            $statment->bindParam(":typeDrink",$alcoholicDrink->getType());
            $statment->bindParam(":percentageDrink",$alcoholicDrink->getPercentage());
            $statment->bindParam(":amount",$alcoholicDrink->getAmount());
            $statment->bindParam(":price",$alcoholicDrink->getPrice());
            return ($statment->execute()) ? $this->PDO->lastInsertId(): false;
        }

        public function show($id){
            $statment = $this->PDO->prepare("SELECT * FROM alcoholicdrink WHERE id = :id");
            $statment->bindParam(":id",$id);
            return ($statment->execute()) ? $statment->fetch() : false; 
        }
        
    }


?>