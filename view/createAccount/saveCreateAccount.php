<?php
    require_once("../../model/dto/dtoClient.php");
    require_once("../../model/dto/dtoUser.php");
    require_once("../../controller/createAccountController.php");

    $client = new DtoClient($_POST['idNewUser'],$_POST['nameNewUser'],$_POST['locationNewUser'],$_POST['detailsLocationNewUser']
                        ,$_POST['userNameNewUser'], $_POST['typeIdNewUser']);

    $user = new DtoUser($_POST['userNameNewUser'],$_POST['passwordNewUser'],$_POST['emailAddressNewUser'],$_POST['cellPhoneNewUser']);                        
    $createAccountController = new CreateAccountController();
    $createAccountController->saveUserClient($user,$client);

?>