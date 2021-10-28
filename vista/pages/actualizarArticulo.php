<?php
include_once '../estructura/header.php';
$titulo = "Listado de Codigos";

$datos = data_submitted();
$abmArticulo = new AbmArticulo();

$idArticulo = $datos['id'];

$listaArticulo = $abmArticulo->buscar($datos);
$objArticulo = $listaArticulo[0];
?>

<div class="container">
    <div class="text-center">
        <form id="listadoArticulos" name="listadoArticulos" method="post" action="../acciones/accionActualizarArticulo.php">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <?php
echo "<input class='form-control' id='id' name='id' type='hidden' value='{$datos['id']}'>";
?>
                </div>
            </div>

            <div class="form-floating col-md-4 mb-3">
                <?php
echo "<input class='form-control' id='nombre' name='nombre' type='text' placeholder='Nuevo nombre artículo' value='{$objArticulo->getNombre()}' maxlength='50' required>";
?>
                <label for="nombre">Ingrese el nuevo nombre del artículo</label>
            </div>

            <div class="form-floating col-md-4 mb-3">
                <?php
echo "<input class='form-control' id='codigo' name='codigo' type='text' placeholder='Nuevo codigo artículo' value='{$objArticulo->getCodigo()}' maxlength='50' required>";
?>
                <label for="codigo">Ingrese el nuevo código del artículo</label>
            </div>

            <div class="col-md-4">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit" value="Editar">Editar</button>
                </div>
            </div>
        </form>
    </div>

</div>

<?php
include_once '../estructura/footer.php';
