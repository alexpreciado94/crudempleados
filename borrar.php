<?php
  include_once 'procesos.php';
  $procesoBorrar = new Procesos();

  if(isset($_POST['si']) || isset($_POST['no'])){
    if(isset($_POST['si'])){
      $procesoBorrar->borrar($_POST['idBorrar']);
      header('Location: ../crudempleados/index.php');
    }
    if(isset($_POST['no'])){
      header('Location: ../crudempleados/index.php');
    }
  }else{
    include_once 'vistaborrar.php';
  }
