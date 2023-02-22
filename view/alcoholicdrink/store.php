<?php
    require_once("../../model/dto/dtoAlcoholicDrink.php");
    require_once("../../controller/alcoholicDrinkController.php");

    $alcoholicDrink = new DtoAlcoholicDrink($_POST['name'],$_POST['type'],$_POST['percentage'],$_POST['amount'],$_POST['price']);
    $alcoholicDrinkController = new AlcoholicDrinkController();
    $alcoholicDrinkController->save($alcoholicDrink);
    
    


?>