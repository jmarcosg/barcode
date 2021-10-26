<?php
require '../vendor/autoload.php';

class controlCodigoBarras
{
    public function validarC11($codigo)
    {
        $valido = false;

        if (preg_match('/^S{1}[0-9]+S{1}$/', $codigo)) {
            $valido = true;
        }

        return $valido;
    }

    public function validarC39E($codigo)
    {
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
        }

        return $valido;
    }

    public function validarC39E_CHECKSUM($codigo)
    {
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
        }

        return $valido;
    }

    public function validarC93($codigo)
    {
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
        }

        return $valido;
    }

}
