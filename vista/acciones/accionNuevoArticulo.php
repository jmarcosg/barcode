<?php
include_once "../estructura/header.php";

$datos = data_submitted();
$abmArticulo = new AbmArticulo();
?>

<div class="container mt-3">
    <?php
$exito = $abmArticulo->alta($datos);
if ($exito) {
    header("Location: ../pages/listarArticulos.php?Message=" . urlencode('Se cargo correctamente el articulo'));
} else {
    header("Location: ../pages/listarArticulos.php?Message=" . urlencode('Hubo un error al cargar el articulo'));
}
?>
</div>