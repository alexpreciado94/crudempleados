<?php
  class Borrado{
    function __construct(){
      include_once 'procesos.php';
      $this->procesoBorrar = new Procesos();
      $this->iniciar();
    }
    function iniciar(){
      if(!isset($_get['enviar'])){
        echo '<form action="#" method="get">
          <select name="aceptar">
            <option value="0">NO</option>
            <option value="1">SI</option>
          </select>
          <input type="submit" name="enviar" value="ENVIAR" />
        </form>';
      }else{
        if($_get['aceptar']==1){
          $this->procesoborrar->borrar();
        }
      }
    }
  }
?>
