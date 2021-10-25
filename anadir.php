<?php
  include_once 'procesos.php';

  $procesoAnadir = new Procesos();
  if(isset($_POST['enviar'])){ //Tiene k recibir algo y el formulario envia a procesos no aqui
    $procesoAnadir->anadir($_POST["newId"], $_POST["newDNI"], $_POST["newNombre"], $_POST["newEmail"], $_POST["newTelefono"]);
    header('Location: ../crudempleados/index.php');
  }else{
    include_once 'vistaanadir.html';
  }
