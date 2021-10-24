<?php
include_once '../estructura/header.php';
$titulo = "Listado de Codigos";

$datos = data_submitted();
$abmArticulo = new AbmArticulo();

$idArticulo = $datos['id_articulo'];

$listaArticulo = $abmArticulo->buscar($datos);
$objArticulo = $listaArticulo[$idArticulo];
?>

<div class="container">
    <form id="listadoArticulos" name="listadoArticulos" method="post" action="accionActualizarArticulo.php">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <?php
echo "<input class='form-control' id='id_articulo' name='id_articulo' type='hidden' value='{$datos['id_articulo']}'>";
?>
            </div>
        </div>

        <div class="form-floating col-md-4 mb-3">
            <?php
echo "<input class='form-control' id='nombreArticuloNuevo' name='nombreArticuloNuevo' type='text' placeholder='Nuevo nombre artículo' value='{$objArticulo->getNombre()}' maxlength='50' required>";
?>
            <label for="nombreArticuloNuevo">Ingrese el nuevo nombre del artículo</label>
        </div>

        <div class="form-floating col-md-4 mb-3">
            <?php
echo "<input class='form-control' id='codigoArticuloNuevo' name='codigoArticuloNuevo' type='text' placeholder='Nuevo codigo artículo' value='{$objArticulo->getCodigo()}' maxlength='50' required>";
?>
            <label for="codigoArticuloNuevo">Ingrese el nuevo código del artículo</label>
        </div>

        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Editar">Editar</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../estructura/footer.php';
