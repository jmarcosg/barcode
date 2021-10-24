<?php
$titulo = "Listado de Codigos";
include_once '../estructura/header.php';
require_once '../../vendor/autoload.php';

$datos = data_submitted();

if (!$datos['codigo_articulo']) {
    header('Location: index.php');
    die();
}

$codigo = $datos['codigo_articulo'];

$codigoBarra = new Picqer\Barcode\BarcodeGeneratorPNG();

?>

<div class="container mt-3" id="panel">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="padding: 20px; border: solid #000 1px; box-shadow: 10px 10px 5px #888888;">
            <div class="panel-heading">
                <h1>Codigo de barra generado</h1>
            </div>
            <hr>
            <div class="qrbox" style="text-align: center;">
                <?php echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_93)) . '">'; ?>
                <?php echo '<p>' . $codigo . '</p>'; ?>
            </div>
            <hr>
            <a href="index.php">Generar otro codigo...</a>
        </div>
    </div>
</div>

<?php
include_once '../estructura/footer.php';
?>