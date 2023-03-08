<?php
    class CreateAccountController{
        private $createAccountService;

        public function __construct(){
            require_once("C:/xampp/htdocs/nigthRagnarok/model/alcoholicDrinkService.php");
            $this->createAccountService = new CreateAccountService();
        }

        public function save($user,$client){
            $id = $this->createAccountService->addClient($user);
            if(!$id){
                echo "re mal todo";
            }else{
                $this->createAccountService->addClient($client);
                header("Location:index.php");
            }
        }
    }
?>