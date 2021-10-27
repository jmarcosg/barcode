<?php
$titulo = "Cargar nuevo artículo";
include_once "../estructura/header.php";

?>

<div class="container mt-3">
    <h1 class="text-center">Cargar nuevo articulo</h1>
    <div class="col-md-4"></div>
    <div class="offset-md-4">
        <form action="accionNuevoArticulo.php" method="post" class="col-md-6 mt-3 " id="articuloNuevo" name="articuloNuevo">
            <div class="">
                <div class="form-floating mb-3">
                    <input class="form-control" id="nombreArticuloNuevo" name="nombreArticuloNuevo" type="text" placeholder="Nombre articulo" required>
                    <label for="nombreArticuloNuevo">Ingrese nombre del articulo</label>
                </div>
            </div>
            <div class="">
                <div class="form-floating mb-3">
                    <input class="form-control" id="codigoArticuloNuevo" name="codigoArticuloNuevo" type="text" placeholder="Codigo articulo" required>
                    <label for="codigoArticuloNuevo">Ingrese el codigo del articulo</label>
                </div>
            </div>
            <div class=" mb-3">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once '../estructura/footer.php';
?>