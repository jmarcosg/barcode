<?php
$titulo = "Listado de Codigos";
include_once '../estructura/header.php';
require_once '../../vendor/autoload.php';

$datos = data_submitted();
$validador = new controlCodigoBarras();

if (!$datos['codigo_articulo']) {
    header('Location: index.php');
    die();
}

if (array_key_exists('tipo_codificacion', $datos) && is_null($datos['tipo_codificacion'])) {
    header('Location: index.php');
    die();
}
$codigo = $datos['codigo_articulo'];
$tipoCodificacion = $datos['tipo_codificacion'] ?? "";

$codigoBarra = new Picqer\Barcode\BarcodeGeneratorPNG();
?>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">Código de barras generado</h5>
        <div class="card-body">
            <div class="qrbox mt-5" style="text-align: center;">
                <?php
switch ($tipoCodificacion) {
    case 'TYPE_CODE_11':
        $codigoValidado = $validador->validarC11($codigo);

        if ($codigoValidado) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_11)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificacion solo admite el formato: SdigitosS</h4>';
        }
        break;
    case 'TYPE_CODE_39':
        $codigoValidado = $validador->validarC39($codigo);

        if ($codigoValidado) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_39)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificación solo admite menos de 127 caracteres</h4>';
        }
        break;
    case 'TYPE_CODE_39_CHECKSUM':
        $codigoValidado = $validador->validarC39_CHECKSUM($codigo);

        if ($codigoValidado) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_39_CHECKSUM)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificación solo admite menos de 127 caracteres</h4>';
        }
        break;
    case 'TYPE_CODE_39E':
        $codigoValidado = $validador->validarC39E($codigo);

        if ($codigoValidado) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_39E)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificación solo admite menos de 127 caracteres</h4>';
        }
        break;
    case 'TYPE_CODE_39E_CHECKSUM':
        $codigoValidado = $validador->validarC39E_CHECKSUM($codigo);

        if ($codigoValidado) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_39E_CHECKSUM)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificación solo admite menos de 127 caracteres</h4>';
        }
        break;
    case 'TYPE_CODE_93':
        $codigoValidado = $validador->validarC93($codigo);

        if ($codigoValidado) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_93)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificación solo admite menos de 127 caracteres</h4>';
        }
        break;
    case 'TYPE_CODE_128':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_CODE_128_A':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128_A)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_CODE_128_B':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128_B)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_CODE_128_C':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128_C)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_CODABAR':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODABAR)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_EAN_2':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_2)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_EAN_5':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_5)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_EAN_8':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_8)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_EAN_13':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_13)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_INTERLEAVED_2_5':
        if (!is_numeric($codigo)) {
            echo "<h4>Esta codificacion solo admite números</h4>";
        } else {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_INTERLEAVED_2_5)) . '">';
            echo '<p>' . $codigo . '</p>';
        }
        break;
    case 'TYPE_INTERLEAVED_2_5_CHECKSUM':
        if (!is_numeric($codigo)) {
            echo "<h4>Esta codificacion solo admite números</h4>";
        } else {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_INTERLEAVED_2_5_CHECKSUM)) . '">';
            echo '<p>' . $codigo . '</p>';
        }
        break;
    case 'TYPE_IMB':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_IMB)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_KIX':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_KIX)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_MSI':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_MSI)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_MSI_CHECKSUM':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_MSI_CHECKSUM)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_PHARMA_CODE':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_PHARMA_CODE)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_PHARMA_CODE_TWO_TRACKS':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_PHARMA_CODE_TWO_TRACKS)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_PLANET':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_PLANET)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_POSTNET':
        if (preg_match("/^[0-9]{5}$/", $codigo) || preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $codigo)) {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_POSTNET)) . '">';
            echo '<p>' . $codigo . '</p>';
        } else {
            echo '<h4>Esta codificación solo acepta ddddd o ddddd-dddd</h4>';
        }
        break;
    case 'TYPE_RMS4CC':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_RMS4CC)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_STANDARD_2_5':
        if (!is_numeric($codigo)) {
            echo "<h4>Esta codificacion solo admite números</h4>";
        } else {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_STANDARD_2_5)) . '">';
            echo '<p>' . $codigo . '</p>';
        }
        break;
    case 'TYPE_STANDARD_2_5_CHECKSUM':
        if (!is_numeric($codigo)) {
            echo "<h4>Esta codificacion solo admite números</h4>";
        } else {
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_STANDARD_2_5_CHECKSUM)) . '">';
            echo '<p>' . $codigo . '</p>';
        }
        break;
    case 'TYPE_UPC_A':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_UPC_A)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    case 'TYPE_UPC_E':
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_UPC_E)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
    default:
        echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_39)) . '">';
        echo '<p>' . $codigo . '</p>';
        break;
}
?>
            </div>

            <div class="text-center mt-5">
                <div class="btn-group">
                    <a href="index.php" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../estructura/footer.php';
?>