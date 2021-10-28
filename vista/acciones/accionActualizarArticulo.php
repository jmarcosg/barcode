<?php
include_once "../estructura/header.php";
$titulo = "Edición de artículo";

$datos = data_submitted();
$abmArticulo = new AbmArticulo();

$articuloBuscado = ['id' => $datos['id']];
$listaArticulos = $abmArticulo->buscar($articuloBuscado);

$objArticulo = $listaArticulos[0];
$modificado = $abmArticulo->modificar($datos);

if ($modificado) {
    $message = "Modificacion exitosa";
    header('Location: ../pages/listarArticulos.php?Message=' . urlencode($message));
} else {
    $message = "Modificacion erronea";
    header('Location: ../pages/listarArticulos.php?Message=' . urlencode($message));
}
