<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<!-- Botón que abre el modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="tittleAddAlcoholicDrink"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tittleAddAlcoholicDrink">Agrega un nuevo licor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nombre: *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
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
                        <input type="number" min="1" step="0.1" id="percentage" name="percentage"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="col-form-label">Cantidad: *</label>
                        <input type="number" id="amount" min="1" step="1" name="amount" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="col-form-label">Precio: *</label>
                        <input type="number" min="2000" step="50" id="price" name="price" class="form-control" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>







<script>
window.addEventListener('load', function() {
  const myModal = new bootstrap.Modal(document.getElementById('myModal'));
  myModal.show();
});
</script>