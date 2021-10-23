<?php
$titulo = "Listado de Codigos";
include_once '../estructura/header.php';

$abmArticulo = new AbmArticulo();
$lista = $abmArticulo->buscar(null);

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
if (count($lista) > 0) {
    foreach ($lista as $var) {
        $id = $var->getId();
        echo "<tr>
            <td class='text-center'>{$var->getId()}</td>
            <td class='text-center'>{$var->getNombre()}</td>
            <td class='text-center'>{$var->getCodigo()}</td>";

        echo "<form method='post' action='actualizarArticulo.php'>
        <td class='text-center'>
        <input name='id_articulo' id='id_articulo' type='hidden' value='$id'><button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-user-edit'></i></button></td></form>

        <form method='post' action='imprimirArticulo.php'>
        <td class='text-center'>
        <input name='id_articulo' id='id_articulo' type='hidden' value='$id'><button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-barcode'></i></button></td></form>";

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