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
        $valido = false;

        if (preg_match('/^S{1}[0-9]+S{1}$/', $codigo)) {
            $valido = true;
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
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
        }

        return $valido;
    }

    /**
     * Verifica la codificacion C39+
     * Tiene que ser: Cualquier cantidad de caracteres menor a 127
     * @param $codigo
     * @return $valido
     */
    public function validarC39E($codigo)
    {
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
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
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
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
        $valido = false;

        if (count($codigo) > 127) {
            $valido = true;
        }

        return $valido;
    }

}
