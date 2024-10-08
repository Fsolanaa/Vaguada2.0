<?php

namespace modelo;

use mysqli;

class DBusuario
{

    private $dbhost = "localhost";
    private $dbuser = "marcos";
    private $dbpassword = "1234";
    private $dbname = "vaguada";
    private $table = "usuarios";
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
    
}
