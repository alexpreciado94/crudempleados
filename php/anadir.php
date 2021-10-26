<?php
  include_once 'procesos.php';
  $procesoAnadir = new Procesos();

  if(isset($_POST['enviar'])){
    if($_POST["newEmail"]==''){$_POST["newEmail"]='NULL';}
    $procesoAnadir->anadir($_POST["newId"], $_POST["newDNI"], $_POST["newNombre"], $_POST["newEmail"], $_POST["newTelefono"]);
    header('Location: /crudempleados/index.php');
  }else{
    include_once '../vistas/vistaanadir.html';
  }
