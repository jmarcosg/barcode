<?php

class articulo
{
    private $id;
    private $nombre;
    private $codigo;
    private $mensajeOperacion;

    public function __construct()
    {
        $this->id = "";
        $this->nombre = "";
        $this->codigo = "";
        $this->mensajeOperacion = "";
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    // Metodos unicos
    public function setear($id, $nombre, $codigo)
    {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setCodigo($codigo);
    }

    // Metodos BD

    // Carga datos a BD
    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "SELECT * FROM 'articulo' WHERE codigo = " . $this->getCodigo();

        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);

            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();

                    $this->setear(
                        $row['id'],
                        $row['nombre'],
                        $row['codigo']
                    );
                }
            }
        } else {
            $this->setMensajeOperacion("Articulo->listar: " . $base->getError());
        }

        return $resp;
    }

    /**
     * Modifica los values de una tupla en la tabla articulo
     * @return boolean $resp
     */
    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "UPDATE articulo SET nombre = '{$this->getNombre()}', codigo = '{$this->getCodigo()}' WHERE id = '" . $this->getId() . "'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Articulo->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Articulo->modificar: " . $base->getError());
        }

        return $resp;
    }

    /**
     * Elimina una tupla a partir del id del articulo en la tabla articulo
     * @return boolean $resp
     */
    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "DELETE FROM articulo WHERE id = " . $this->getId();

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Articulo->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Articulo->eliminar: " . $base->getError());
        }

        return $resp;
    }

    /**
     * Lista todas los articulos que cumplan con la condicion recibida por parametro
     * Retorna un arreglo con todos los datos de los articulos
     * @param String $condicion
     * @return $arreglo[]
     */
    public function listar($condicion = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM articulo ";

        if ($condicion != "") {
            $sql .= 'WHERE ' . $condicion;
        }

        if ($base->Iniciar()) {

            $res = $base->Ejecutar($sql);

            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $base->Registro()) {
                        $articulo = new articulo();

                        $articulo->setear(
                            $row['id'],
                            $row['nombre'],
                            $row['codigo']
                        );

                        array_push($arreglo, $articulo);
                    }
                }
            }
        } else {
            $this->setMensajeOperacion("Articulo->listar: " . $base->getError());
        }

        return $arreglo;
    }

    /**
     * Inserta una nueva tupla en la tabla articulo
     * @return boolean $resp
     */
    public function insertar()
    {
        $base = new BaseDatos();
        $resp = false;

        $sql = "INSERT INTO articulo(nombre, codigo)
                VALUES ('" . $this->getNombre() . "','" . $this->getCodigo() . "')";

        if ($base->Iniciar()) {
            if ($id = $base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Articulo->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Articulo->insertar: " . $base->getError());
        }

        return $resp;
    }
}
