<?php
class Conexion{
  function __construct(){
    $this->servidorbd = 'localhost';
    $this->usuario = 'root';
    $this->contraseña = '';
    $this->basedatos = 'empleadosphp';

    $this->conexion = new mysqli($this->servidorbd, $this->usuario, $this->contraseña, $this->basedatos);
  }
  function consultar($consulta){
    return mysqli_query($this->conexion, $consulta);
  }
}
?>
