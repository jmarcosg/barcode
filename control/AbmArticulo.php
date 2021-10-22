<?php

class AbmUsuario
{
    private function cargarObjeto($parametro)
    {
        $articulo = null;

        if (array_key_exists('id_articulo', $parametro) && array_key_exists('nombre_articulo', $parametro) && array_key_exists('codigo_articulo', $parametro)) {
            $articulo = new Articulo();

            $articulo->setear(
                $parametro['id_articulo'],
                $parametro['nombre_articulo'],
                $parametro['codigo_articulo']
            );
        }

        return $articulo;
    }

    private function cargarObjetoConClave($parametro)
    {
        $objArticulo = null;

        if (isset($parametro['id_articulo'])) {
            $objArticulo = new Articulo();
            $objArticulo->setear($parametro['id_articulo'], null, null);
        }

        return $objArticulo;
    }

    private function seteadosCamposClaves($parametro)
    {
        $resp = false;

        if (isset($parametro)) {
            $resp = true;
        }
        return $resp;
    }

    public function alta($parametro)
    {
        $respuesta = false;
        $objArticulo = $this->cargarObjeto($parametro);

        if ($objArticulo != null and $objArticulo->insertar()) {
            $respuesta = true;
        }

        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;

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

        if ($this->seteadosCamposClaves($parametro)) {
            $objArticulo = $this->buscar($parametro);
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
            if (isset($param['id_usuario'])) {
                $where .= " and id = '" . $param['id_usuario'] . "'";
            }

            if (isset($param['nombre_articulo'])) {
                $where .= " and nombre = '" . $param['nombre_articulo'] . "'";
            }

            if (isset($param['codigo_articulo'])) {
                $where .= " and codigo ='" . $param['codigo_articulo'] . "'";
            }
        }

        $arreglo = articulo::listar($where);

        return $arreglo;
    }
}
