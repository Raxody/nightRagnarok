<?php
    require_once("../head/head.php");
    require_once("../../controller/alcoholicDrinkController.php");

    $alcoholicDrinkController = new AlcoholicDrinkController();
    $alcoholicDrink = $alcoholicDrinkController->show($_GET['id']);
?>
<div class="modal fade" id="myModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tittleAddAlcoholicDrink">
                    <?= $alcoholicDrink['id']." ".$alcoholicDrink['nameAlcoholicDrink'] ?> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="col-form-label">Nombre: *</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="<?= $alcoholicDrink['nameAlcoholicDrink'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="col-form-label">Tipo de licor: *</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="Vino">Vino</option>
                        <option value="Ron">Ron</option>
                        <option value="Whisky">Whisky</option>
                        <option value="Aguardiente">Aguardiente</option>
                        <option value="Tequila">Tequila</option>
                        <option value="Cerveza">Cerveza</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="percentage" class="col-form-label">Porcentaje de alcohol: *</label>
                    <input type="number" min="1" step="0.1" id="percentage" name="percentage" class="form-control"
                        value="<?= $alcoholicDrink['alcoholPercentage'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="col-form-label">Cantidad: *</label>
                    <input type="number" id="amount" min="1" step="1" name="amount"
                        value="<?= $alcoholicDrink['amount'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="col-form-label">Precio: *</label>
                    <input type="number" min="2000" step="50" id="price" name="price"
                        value="<?= $alcoholicDrink['price'] ?>" class="form-control" required>
                </div>

            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" 
        data-bs-backdrop="static" data-bs-keyboard="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar la bebida alcoholica?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Una vez eliminado no podra recuperar la infomación
            </div>
            <div class="modal-footer">
            <a href="./show.php?id=<?=$alcoholicDrink['id']?>" class="btn btn-success">Regresar</a>    
            <a href="./delete.php?id=<?=$alcoholicDrink['id']?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>






<script>
window.addEventListener('load', function() {
    const myModal = new bootstrap.Modal(document.getElementById('myModal'));
    myModal.show();
});
document.getElementById("type").value = "<?php echo $alcoholicDrink['kind']; ?>"
</script>


<?php
    require_once("../footer/footer.php");
?>