<?php
    require_once("../../model/dto/dtoClient.php");
    require_once("../../model/dto/dtoUser.php");
    require_once("../../controller/createAccountController.php");

    $client = new DtoClient($_POST['idNewUser'],$_POST['nameNewUser'],$_POST['locationNewUser'],$_POST['detailsLocationNewUser']
                        ,$_POST['price']);
    $alcoholicDrinkController = new AlcoholicDrinkController();
    $alcoholicDrinkController->save($alcoholicDrink);
    
    


?>