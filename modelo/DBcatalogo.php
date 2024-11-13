<?php

namespace modelo;

use mysqli;

class DBcatalogo
{

    private $dbhost = "localhost";
    private $dbuser = "marcos";
    private $dbpassword = "1234";
    private $dbname = "vaguada";
    private $table = "catalogo";
    private $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
        $this->conexion->select_db($this->dbname);
        $this->conexion->query("SET NAMES 'utf8'");
        if ($this->conexion->connect_error) {
            die("Error de conexión :" . $this->conexion->connect_error);
        }
    }
    public function obtenerProductos()
    {
        $select = mysqli_query($this->conexion, "SELECT * FROM $this->table");
        $listaFavoritos = array();

        while ($row = mysqli_fetch_assoc($select)) {
            $listaFavoritos[] = $row;
        }

        return $listaFavoritos;
        //Liberamos el resultado y cerramos la conexion a la DB
        mysqli_free_result($select);
        mysqli_close($this->conexion);
    }
}
