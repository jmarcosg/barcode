<?php

class AbmArticulo
{
    public function cargarObjeto($parametro)
    {
        $articulo = null;
        // print_r($parametro);
        if (array_key_exists('nombreArticuloNuevo', $parametro) && array_key_exists('codigoArticuloNuevo', $parametro)) {
            $articulo = new articulo();

            $articulo->setear(
                '',
                $parametro['nombreArticuloNuevo'],
                $parametro['codigoArticuloNuevo']
            );
        }

        return $articulo;
    }

    public function cargarObjetoConClave($parametro)
    {
        $objArticulo = null;

        if (isset($parametro['id'])) {
            $objArticulo = new articulo();
            $objArticulo->setear($parametro['id'], null, null);
        }

        return $objArticulo;
    }

    public function seteadosCamposClaves($parametro)
    {
        $resp = false;

        if (isset($parametro)) {
            $resp = true;
        }

        echo $resp;
        return $resp;
    }

    public function alta($parametro)
    {
        $respuesta = false;
        $objArticulo = $this->cargarObjeto($parametro);
        if ($objArticulo != null && $objArticulo->insertar()) {
            $respuesta = true;
        }

        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;
        $objArticulo = new articulo();

        if ($this->seteadosCamposClaves($parametro)) {
            $objArticulo = $this->cargarObjetoConClave($parametro);

            if ($objArticulo != null && $objArticulo->eliminar()) {
                $respuesta = true;
            }
        }

        return $respuesta;
    }

    public function modificar($parametro)
    {
        $respuesta = false;
        $objArticulo = new articulo();

        if ($this->seteadosCamposClaves($parametro)) {
            $objArticulo = $this->cargarObjeto($parametro);

            if ($objArticulo != null && $objArticulo->modificar()) {
                $respuesta = true;
            }
        }

        return $respuesta;
    }

    public function buscar($param)
    {
        $where = " true ";

        if ($param != null) {
            if (isset($param['id'])) {
                $where .= " and id = '" . $param['id'] . "'";
            }

            if (isset($param['nombre'])) {
                $where .= " and nombre = '" . $param['nombre'] . "'";
            }

            if (isset($param['codigo'])) {
                $where .= " and codigo ='" . $param['codigo'] . "'";
            }
        }

        $articulo = new articulo();
        $arreglo = $articulo->listar($where);

        return $arreglo;
    }
}
