<?php

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
// Metodos para regiatrar usuario
    public function registrarUsuario($nombreCompleto, $correo, $telefono, $sexo, $fechaNacimiento, $contrasena){

        $insertar = "INSERT INTO usuarios (nombreCompleto, correo, telefono, sexo, fNacimiento, contrasena) VALUES ('$nombreCompleto', '$correo', '$telefono', '$sexo', '$fechaNacimiento', '$contrasena')";

       $query = mysqli_query($this->conexion,$insertar);
            
    }
}
?>