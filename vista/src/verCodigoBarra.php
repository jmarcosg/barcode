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
<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">Código de barra generado</h5>
        <div class="card-body">
            <div class="qrbox mt-3" style="text-align: center;">
                <?php echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_39)) . '">'; ?>
                <?php echo '<p>' . $codigo . '</p>'; ?>
            </div>

            <div class="btn-group">
                <a href="index.php" class="btn btn-secondary">Volver</a>
                <a href="#" class="btn btn-primary">Descargar</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../estructura/footer.php';
?>