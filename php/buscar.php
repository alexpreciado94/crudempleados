<?php
  include_once 'procesos.php';
  $procesoBuscar = new Procesos();
  if(isset($_POST['enviar'])){
    $procesoBuscar->buscar($_POST["dniBuscar"]);
  }else{
    include_once '../vistas/vistabuscar.html';
  }
