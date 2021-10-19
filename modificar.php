<?php
  class Modificado{
    function __construct(){
      include_once 'procesos.php';
      $this->procesoModificado = new Procesos();
      $this->procesoModificado->modificar();
    }
  }
?>
