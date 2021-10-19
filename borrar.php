<?php
  class Borrado{
    function __construct(){
      include_once 'procesos.php';
      $this->procesoBorrar = new Procesos();
      $this->filaBorrar = $_get['filaBorrar'];
      $this->iniciar();
    }
    function iniciar(){
      if(!isset($_get['enviar'])){
        echo
        echo '<form action="#" method="get">
          <label for="aceptar">¿Esta sequro que quiere borrar al empleado?</label>
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
