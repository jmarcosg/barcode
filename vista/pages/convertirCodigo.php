<?php
$titulo = "Conversor de Códigos";
include_once '../estructura/header.php';
require_once '../../vendor/autoload.php';
?>
<div class="container mt-3">
    <h3 class='text-center'>Generador de códigos</h3>
    <div class='col-md-4'></div>
    <div class='offset-md-3'>

        <form action='' method='post' class='col-md-8 mt-3 ' id='convertirCodigo' name='convertirCodigo'>
            <div class=''>
                <div class='form-floating mb-3'>
                    <input class='form-control' id='codigo_articulo' name='codigo_articulo' type='text' placeholder='Codigo articulo' required>
                    <label for='codigo_articulo'>Ingrese el código del artículo</label>
                </div>
            </div>

            <div class=''>
                <div class='form-floating mb-3'>
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
                </div>
            </div>

            <div class=' mb-3'>
                <div class='d-grid'>
                    <button class='btn btn-primary' type='submit' name="generar">Generar Codigo</button>
                </div>
            </div>
        </form>
    </div>
    <?php
$datos = data_submitted();
if (isset($datos['generar'])) {

    $validador = new controlCodigoBarras();

    if (!$datos['codigo_articulo']) {
        header('Location: convertirCodigo.php');
        die();
    }

    if (array_key_exists('tipo_codificacion', $datos) && is_null($datos['tipo_codificacion'])) {
        header('Location: convertirCodigo.php');
        die();
    }
    $codigo = $datos['codigo_articulo'];
    $tipoCodificacion = $datos['tipo_codificacion'] ?? "";

    $codigoBarra = new Picqer\Barcode\BarcodeGeneratorPNG();

    echo "
            <div class='card'>
                <h5 class='card-header'>Código de barras generado: {$tipoCodificacion}</h5>
                <div class='card-body'>
                    <div class='qrbox mt-5' style='text-align: center;'>
            ";
    switch ($tipoCodificacion) {
        case 'TYPE_CODE_11':
            $codigoValidado = $validador->validarC11($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_11)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificacion solo admite el formato: 12345678-</h4>';
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
            $codigoValidado = $validador->validar128AB($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128_A)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite menos de 127 caracteres, valores numerícos (0-9), caracteres alfabeticos en mayúsculas (A-Z), símbolos de puntación, siete caracteres especiales y caracteres de "control"</h4>';
            }
            break;
        case 'TYPE_CODE_128_B':
            $codigoValidado = $validador->validar128AB($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128_B)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite menos de 127 caracteres, valores numerícos (0-9), caracteres alfabeticos en mayúsculas (A-Z), símbolos de puntación, siete caracteres especiales y caracteres de "control"</h4>';
            }
            break;
        case 'TYPE_CODE_128_C':
            $codigoValidado = $validador->validar128C($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128_C)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite menos de 127 caracteres, dígitos pares desde el 00 al 99 y tres caracteres especiales</h4>';
            }
            break;
        case 'TYPE_CODABAR':
            $codigoValidado = $validador->validarCODABAR($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODABAR)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite hasta 16 caracteres y en formato "123456A"</h4>';
            }
            break;
        case 'TYPE_EAN_2':
            $codigoValidado = $validador->validarEAN($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_2)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite hasta 55 caracteres y solo números</h4>';
            }
            break;
        case 'TYPE_EAN_5':
            $codigoValidado = $validador->validarEAN($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_5)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite hasta 55 caracteres y solo números</h4>';
            }
            break;
        case 'TYPE_EAN_8':
            $codigoValidado = $validador->validarEAN($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_8)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite hasta 55 caracteres y solo números</h4>';
            }
            break;
        case 'TYPE_EAN_13':
            $codigoValidado = $validador->validarEAN($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_EAN_13)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite hasta 55 caracteres y solo números</h4>';
            }
            break;
        case 'TYPE_INTERLEAVED_2_5':
            $codigoValidado = $validador->validarINTERLEAVED($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_INTERLEAVED_2_5)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números</h4>';
            }
            break;
        case 'TYPE_INTERLEAVED_2_5_CHECKSUM':
            $codigoValidado = $validador->validarINTERLEAVED($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_INTERLEAVED_2_5_CHECKSUM)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números</h4>';
            }
            break;
        case 'TYPE_IMB':
            $codigoValidado = $validador->validarIMB($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_IMB)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números y hasta 31 caracteres</h4>';
            }
            break;
        case 'TYPE_KIX':
            $codigoValidado = $validador->validarKIX($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_KIX)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite el formato: "1230AA12345XHUISET"</h4>';
            }
            break;
        case 'TYPE_MSI':
            $codigoValidado = $validador->validarMSI($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_MSI)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números</h4>';
            }
            break;
        case 'TYPE_MSI_CHECKSUM':
            $codigoValidado = $validador->validarMSI($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_MSI_CHECKSUM)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números</h4>';
            }
            break;
        case 'TYPE_PHARMA_CODE':
            $codigoValidado = $validador->validarPHARMA($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_PHARMA_CODE)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números y entre 3-131070 caracteres</h4>';
            }
            break;
        case 'TYPE_PHARMA_CODE_TWO_TRACKS':
            $codigoValidado = $validador->validarPHARMA2T($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_PHARMA_CODE_TWO_TRACKS)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números y entre 3-64570080 caracteres</h4>';
            }
            break;
        case 'TYPE_PLANET':
            $codigoValidado = $validador->validarPLANET($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_PLANET)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite números y entre 12-14 caracteres</h4>';
            }
            break;
        case 'TYPE_POSTNET':
            $codigoValidado = $validador->validarPOSTNET($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_POSTNET)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite formato: "12095" o "12095-3467"</h4>';
            }
            break;
        case 'TYPE_RMS4CC':
            $codigoValidado = $validador->validarRMS4CC($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_RMS4CC)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite formato: "(12095ABCDZ)" y hasta 36 caracteres</h4>';
            }
            break;
        case 'TYPE_STANDARD_2_5':
            $codigoValidado = $validador->validarSTANDARD($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_STANDARD_2_5)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite numeros</h4>';
            }
            break;
        case 'TYPE_STANDARD_2_5_CHECKSUM':
            $codigoValidado = $validador->validarSTANDARD($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_STANDARD_2_5_CHECKSUM)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite numeros</h4>';
            }
            break;
        case 'TYPE_UPC_A':
            $codigoValidado = $validador->validarUPC($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_UPC_A)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite numeros</h4>';
            }
            break;
        case 'TYPE_UPC_E':
            $codigoValidado = $validador->validarUPC($codigo);

            if ($codigoValidado) {
                echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_UPC_E)) . '">';
                echo '<p>' . $codigo . '</p>';
            } else {
                echo '<h4>Esta codificación solo admite numeros</h4>';
            }
            break;
        default:
            echo '<img src="data:image/png;base64,' . base64_encode($codigoBarra->getBarcode($codigo, $codigoBarra::TYPE_CODE_128)) . '">';
            echo '<p>' . $codigo . '</p>';
            break;
    }
    echo "</div>";
    echo "
                </div>
            </div>
            ";
}
?>
</div>
<?php
include_once '../estructura/footer.php';
?>