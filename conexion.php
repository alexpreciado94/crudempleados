<?php
class Conexion{
  function __construct(){
    $this->servidorbd = '10.2daw.esvirgua.com';
    $this->usuario = 'user2daw_10';
    $this->contraseña = 'j#~hXlp0tIZ;';
    $this->basedatos = 'user2daw_BD1-10';

    $this->conexion = new mysqli($this->servidorbd, $this->usuario, $this->contraseña, $this->basedatos);
  }
  function consultar($consulta){
    return mysqli_query($this->conexion, $consulta);
  }
}
?>
