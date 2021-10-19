<?php
  class Borrado{
    function __construct(){
      include_once 'procesos.php';
      $this->procesoBorrar = new Procesos();
      $this->procesoborrar->borrar();
    }
  }
?>
