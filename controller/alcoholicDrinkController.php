<?php
    class AlcoholicDrinkController{
        private $alcoholicDrinkService;

        public function __construct(){
            require_once("C:/xampp/htdocs/nigthRagnarok/model/alcoholicDrinkService.php");
            $this->alcoholicDrinkService = new AlcoholicDrinkService();
        }

        public function save($alcoholicDrink){
            $id = $this->alcoholicDrinkService->addAlcoholicDrink($alcoholicDrink);
            return (!$id) ?  header("Location:alcoholicDrink.php") : header("Location:show.php?id=".$id);
        }


        public function show($id){
            return (!$this->alcoholicDrinkService->show($id) ) ? header("Location:alcoholicDrink.php") : $this->alcoholicDrinkService->show($id);
        }

    }
?>