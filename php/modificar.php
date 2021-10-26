<?php
  include_once 'procesos.php';
  $procesoModificar = new Procesos();
  if(isset($_POST['enviar'])){
    $procesoModificar->modificar($fila['idEmpleado'], $_POST["newDNI"], $_POST["newNombre"], $_POST["newEmail"], $_POST["newTelefono"]);
    header('Location: ../crudempleados/index.php');
  }else{
    include_once '/vistas/vistamodificar.php';
  }
