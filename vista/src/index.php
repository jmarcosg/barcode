<?php
$titulo = "Listado de Codigos";
include_once '../estructura/header.php';

$abmArticulo = new AbmArticulo();
$listaArticulos = $abmArticulo->buscar(null);

?>

<div class="container mt-3">
    <table class='table'>
        <thead class='table-dark'>
            <tr>
                <th scope='col' class='text-center'>ID</th>
                <th scope='col' class='text-center'>Nombre</th>
                <th scope='col' class='text-center'>Codigo</th>
                <th scope='col' class='text-center'>Editar</th>
                <th scope='col' class='text-center'>Imprimir</th>
            </tr>
        </thead>

        <?php
if (count($listaArticulos) > 0) {
    foreach ($listaArticulos as $articulo) {
        $id = $articulo->getId();
        echo "<tr>
            <td class='text-center'>{$articulo->getId()}</td>
            <td class='text-center'>{$articulo->getNombre()}</td>
            <td class='text-center'>{$articulo->getCodigo()}</td>";
        echo "<form method='post' action='actualizarArticulo.php'>
        <td class='text-center'>
        <input name='id_articulo' id='id_articulo' type='hidden' value='$id'><button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-user-edit'></i></button></td></form>

        <form method='post' action='verCodigoBarra.php'>
        <td class='text-center'>
        <input name='codigo_articulo' id='codigo_articulo' type='hidden' value='{$articulo->getCodigo()}'><button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-barcode'></i></button></td></form>";

        echo "</button></td></form></tr>";
    }
}
?>
    </table>
    <?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>
</div>

<?php
include_once '../estructura/footer.php';
?>