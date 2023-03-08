<?php
    class CreateAccountController{
        private $createAccountService;

        public function __construct(){
            require_once("C:/xampp/htdocs/nigthRagnarok/model/createAccountService.php");
            require_once("C:/xampp/htdocs/nigthRagnarok/model/dto/dtoClient.php");
            require_once("C:/xampp/htdocs/nigthRagnarok/model/dto/dtoUser.php");
            $this->createAccountService = new CreateAccountService();
        }

        public function saveUserClient(DtoUser $user, DtoClient $client){
            $id = $this->createAccountService->addUserClient($user);
            echo $id;
            if($id == null){
                echo "repetido care verga";
            }else if($id == 0){
                $this->createAccountService->addClient($client);
                return header("Location:../login/login.php");
            }else{
                echo "error";
            }
        }
    }
?>