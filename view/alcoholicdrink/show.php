<?php
    require_once("../head/head.php");
    require_once("../../controller/alcoholicDrinkController.php");

    $alcoholicDrinkController = new AlcoholicDrinkController();
    $alcoholicDrink = $alcoholicDrinkController->show($_GET['id']);


?>





<?php
    require_once("../footer/footer.php");
?>