<?php
// require '../vendor/autoload.php';

class controlCodigoBarras
{
    /**
     * Verifica la codificacion C11
     * Tiene que ser: S + cualquier numero del 0-9 + S
     * @param $codigo
     * @return $valido
     */
    public function validarC11($codigo)
    {
        $valido = true;

        if (!preg_match('/^[S]{1}[0-9]+[S]{1}$/', $codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion C39
     * Tiene que ser: Cualquier cantidad de caracteres menor a 127
     * @param $codigo
     * @return $valido
     */
    public function validarC39($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 127) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion C39+
     * Tiene que ser: Cualquier cantidad de caracteres menor a 127
     * @param $codigo
     * @return $valido
     */
    public function validarC39_CHECKSUM($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 127) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion C39E
     * Tiene que ser: Cualquier cantidad de caracteres menor a 127
     * @param $codigo
     * @return $valido
     */
    public function validarC39E($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 127) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion C39E+
     * Tiene que ser: Cualquier cantidad de caracteres menor a 127
     * @param $codigo
     * @return $valido
     */
    public function validarC39E_CHECKSUM($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 127) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion C93
     * Tiene que ser: Cualquier cantidad de caracteres menor a 127
     * @param $codigo
     * @return $valido
     */
    public function validarC93($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 127) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion CODABAR
     * Tiene que ser: Menor o igual a 16 caracteres, tiene que tener formato NNNNNNL
     * Donde N es cualquier número del 0-9 y L una letra de la A-D
     * @param $codigo
     * @return $valido
     */
    public function validarCODABAR($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 16 && !preg_match('/^[0-9]+[A-D]+$/', $codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion EAN
     * Tiene que ser: Menor o igual a 55 caracteres y solo números
     * @param $codigo
     * @return $valido
     */
    public function validarEAN($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 55 && !is_numeric($codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion INTERLEAVED
     * Tiene que ser: Solo números
     * @param $codigo
     * @return $valido
     */
    public function validarINTERLEAVED($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion IMB
     * Tiene que ser: Solo números y menor a 31 caracteres
     * @param $codigo
     * @return $valido
     */
    public function validarIMB($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo) && count(str_split($codigo)) > 31) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion KIX
     * Tiene que ser: Solo números y letras. Hasta 18 caracteres
     * @param $codigo
     * @return $valido
     */
    public function validarKIX($codigo)
    {
        $valido = true;

        if (!preg_match('/[0-9]{4}[A-Z]{2}[0-9]{1,5}[X]{1}[A-Z]{1,6}/', $codigo) && count(str_split($codigo)) > 18) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion MSI
     * Tiene que ser: Solo números
     * @param $codigo
     * @return $valido
     */
    public function validarMSI($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion PHARMA
     * Tiene que ser: Solo números y entre 3-131070 caracteres
     * @param $codigo
     * @return $valido
     */
    public function validarPHARMA($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo)) {
            $valido = false;
            if (str_split(count($codigo)) < 3 || str_split(count($codigo)) > 131070) {
                $valido = false;
            }
        }

        return $valido;
    }

    /**
     * Verifica la codificacion PHARMA2T
     * Tiene que ser: Solo números y entre 3-64570080 caracteres
     * @param $codigo
     * @return $valido
     */
    public function validarPHARMA2T($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo)) {
            $valido = false;
            if (str_split(count($codigo)) < 3 || str_split(count($codigo)) > 64570080) {
                $valido = false;
            }
        }

        return $valido;
    }

    /**
     * Verifica la codificacion PLANET
     * Tiene que ser: Solo números y entre 3-64570080 caracteres
     * @param $codigo
     * @return $valido
     */
    public function validarPLANET($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo)) {
            $valido = false;
            if (str_split(count($codigo)) < 12 || str_split(count($codigo)) > 14) {
                $valido = false;
            }
        }

        return $valido;
    }

    /**
     * Verifica la codificacion POSTNET
     * Tiene que ser: Solo números y entre 3-64570080 caracteres
     * @param $codigo
     * @return $valido
     */
    public function validarPOSTNET($codigo)
    {
        $valido = true;

        echo "codigo: " . $codigo;

        if (!preg_match('/^[0-9]{5}$/', $codigo) || !preg_match('/^[0-9]{5}[-]{1}[0-9]{4}$/', $codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion RMS4CC
     * Tiene que ser: Solo números
     * @param $codigo
     * @return $valido
     */
    public function validarRMS4CC($codigo)
    {
        $valido = true;

        if (!preg_match('/[A-Z0-9]+/', $codigo) && count(str_split($codigo)) > 36) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion STANDARD 25 y 25+
     * Tiene que ser: Solo números
     * @param $codigo
     * @return $valido
     */
    public function validarSTANDARD($codigo)
    {
        $valido = true;

        if (!is_numeric($codigo)) {
            $valido = false;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion UPC
     * Tiene que ser: Menor o igual a 13 caracteres y solo números
     * @param $codigo
     * @return $valido
     */
    public function validarUPC($codigo)
    {
        $valido = true;

        if (count(str_split($codigo)) > 13 && !is_numeric($codigo)) {
            $valido = false;
        }

        return $valido;
    }
}
