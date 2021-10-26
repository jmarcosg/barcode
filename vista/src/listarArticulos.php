<?php
$titulo = "Listado de Codigos";
include_once '../estructura/header.php';

$abmArticulo = new AbmArticulo();
$listaArticulos = $abmArticulo->buscar(null);

?>

<div class="container mt-3">
    <table class='table align-middle'>
        <thead class='table-dark'>
            <tr>
                <th scope='col' class='text-center'>ID</th>
                <th scope='col' class='text-center'>Nombre</th>
                <th scope='col' class='text-center'>Codigo</th>
                <th scope='col' class='text-center'>Editar</th>
                <th scope='col' class='text-center'>Codificación</th>
                <th scope='col' class='text-center'>Imprimir</th>
            </tr>
        </thead>
        <tbody>
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
            <input name='id_articulo' id='id_articulo' type='hidden' value='$id'>
            <button class='btn btn-warning btn-sm' type='submit' value='$id' name='id_articulo' id='id_articulo' role='button' formaction='actualizarArticulo.php'><i class='bi bi-pencil-square'></i></button>
        </td>
        </form>";

        echo "<form method='post' action='verCodigoBarras.php' id='codificacion' name='codificacion'>
        <td class='text-center'>
            <select class='form-select form-select-sm' name='tipo_codificacion' id='tipo_codificacion' aria-label='.form-select-sm' required>
                <option disabled selected>Seleccione una codificación (default: C128)</option>
                <option disabled>Más usados</option>
                <option value='TYPE_CODE_39'>C39</option>
                <option value='TYPE_CODE_128'>C128</option>
                <option disabled>Otros</option>
                <option value='TYPE_CODE_11'>C11</option>
                <option value='TYPE_CODE_39_CHECKSUM'>C39+</option>
                <option value='TYPE_CODE_39E'>C39E</option>
                <option value='TYPE_CODE_39E_CHECKSUM'>C39E+</option>
                <option value='TYPE_CODE_93'>C93</option>
                <option value='TYPE_CODE_128_A'>C128A</option>
                <option value='TYPE_CODE_128_B'>C128B</option>
                <option value='TYPE_CODE_128_C'>C128C</option>
                <option value='TYPE_CODABAR'>CODABAR</option>
                <option value='TYPE_EAN_2'>EAN2</option>
                <option value='TYPE_EAN_5'>EAN5</option>
                <option value='TYPE_EAN_8'>EAN8</option>
                <option value='TYPE_EAN_13'>EAN13</option>
                <option value='TYPE_INTERLEAVED_2_5'>I25</option>
                <option value='TYPE_INTERLEAVED_2_5_CHECKSUM'>I25+</option>
                <option value='TYPE_IMB'>IMB</option>
                <option value='TYPE_KIX'>KIX</option>
                <option value='TYPE_MSI'>MSI</option>
                <option value='TYPE_MSI_CHECKSUM'>MSI+</option>
                <option value='TYPE_PHARMA_CODE'>PHARMA</option>
                <option value='TYPE_PHARMA_CODE_TWO_TRACKS'>PHARMA2T</option>
                <option value='TYPE_PLANET'>PLANET</option>
                <option value='TYPE_POSTNET'>POSTNET</option>
                <option value='TYPE_RMS4CC'>RMS4CC</option>
                <option value='TYPE_STANDARD_2_5'>S25</option>
                <option value='TYPE_STANDARD_2_5_CHECKSUM'>S25+</option>
                <option value='TYPE_UPC_A'>UPCA</option>
                <option value='TYPE_UPC_E'>UPCE</option>
            </select>
        </td>";

        echo "<td class='text-center'>
        <input name='codigo_articulo' id='codigo_articulo' type='hidden' value='{$articulo->getCodigo()}'>
        <button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-barcode'></i></button>
        </td>
        </form>";

        echo "</tr>";
    }
}
?>
    </tbody>
    </table>

    <div class="text-center">
        <button class="btn btn-warning">Nuevo artículo</button>
    </div>
    <?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>
</div>

<?php
include_once '../estructura/footer.php';
?>