<?php
class Conexion{
  function __construct(){
    include_once './configDB.php';

    $this->conexion = new mysqli(SERVIDORBD, USUARIO, CONTRASENA, BASEDATOS);
  }
  function consultar($consulta){
    $resultado = mysqli_query($this->conexion, $consulta);
    echo $this->conexion->error;
    return $resultado;
  }
}
