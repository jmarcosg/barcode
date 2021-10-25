<?php
include_once "../estructura/header.php";

$datos = data_submitted();
$abmArticulo = new AbmArticulo();

$articuloBuscado = ['id' => $datos['id_articulo']];

$listaArticulos = $abmArticulo->buscar($articuloBuscado);
$objArticulo = $listaArticulos[0];
$modificado = $abmArticulo->modificar($datos);

if ($modificado) {
    $message = "Modificacion exitosa";
    header('Location: index.php?Message=' . urlencode($message));
} else {
    $message = "Modificacion erronea";
    header('Location: index.php?Message=' . urlencode($message));
}
