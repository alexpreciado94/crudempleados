<?php
  class Procesos{
    function __construct(){
      include_once 'conexion.php';
      $this->conexion = new Conexion();
    }
    function listar(){
      $sql = 'select * from empleados';
      $resultado = $this->conexion->consultar($sql);
      echo '<table>
      <tr>
        <th>DNI</th>
        <th>NOMBRE</th>
        <th>E-MAIL</th>
        <th>TELÉFONO</th>
      </tr>';
      for($i=0;$i<$resultado->num_rows;$i++){
        $fila = mysqli_fetch_assoc($resultado);
        echo '<tr>
          <td>'.$fila['dni'].'</td>
          <td>'.$fila['nombre'].'</td>
          <td>'.$fila['email'].'</td>
          <td>'.$fila['telefono'].'</td>
          <td><a href="php/opciones.php?irA=1&idModificar='.$fila['idEmpleado'].'&dniModificar='.$fila['dni'].
          '&nombreModificar='.$fila['nombre'].'&emailModificar='.$fila['email'].'&telefonoModificar='.$fila['telefono'].'">Modificar</a></td>
          <td><a href="php/opciones.php?irA=2&filaBorrar='.$fila['idEmpleado'].'">Borrar</a></td>
        </tr>';
      }
      echo '</table>';
      //echo '<p>El error es '.$this->conexion->error().'</p>';
    }
    function anadir($dni, $nombre, $email, $telefono){
      if($email==''){
        $sql = "insert into empleados(dni, nombre, email, telefono) values ('".$dni."', '".$nombre."', NULL, '".$telefono."')";
      }else{
        $sql = "insert into empleados(dni, nombre, email, telefono) values ('".$dni."', '".$nombre."', '".$email."', '".$telefono."')";
      }
      $resultado = $this->conexion->consultar($sql);
    }
    function modificar($id, $dni, $nombre, $email, $telefono){
      if($email==''){
        $sql = "update empleados set dni='"
        .$dni."', nombre='".$nombre."', email=NULL,
        telefono='".$telefono."'
        where idEmpleado=".$id.";";
      }else{
        $sql = "update empleados set dni='"
        .$dni."', nombre='".$nombre."', email='"
        .$email."', telefono='".$telefono."'
        where idEmpleado=".$id.";";
      }
      $resultado = $this->conexion->consultar($sql);
    }
    function borrar($borrarId){
      $sql = "delete from empleados where idEmpleado=".$borrarId;
      $resultado = $this->conexion->consultar($sql);
    }
    function buscar($dniBuscar, $nombreBuscar){
      if($dniBuscar!=''){
        $sql = "select * from empleados where dni='".$dniBuscar."';";
        if($nombreBuscar!=''){
          $sql = "select * from empleados where dni='".$dniBuscar."' and nombre like'%".$nombreBuscar."%';";
        }
      }else{
        if($nombreBuscar!=''){
          $sql = "select * from empleados where nombre like'%".$nombreBuscar."%';";
        }
      }
      $resultado = $this->conexion->consultar($sql);
      if($resultado->num_rows==0){
        echo '<p>No existe un empleado con los datos buscados</p>';
      }else{
        echo '<table>
        <tr>
          <th>ID</th>
          <th>DNI</th>
          <th>NOMBRE</th>
          <th>E-MAIL</th>
          <th>TELÉFONO</th>
        </tr>';
        for($i=0;$i<$resultado->num_rows;$i++){
          $fila = mysqli_fetch_assoc($resultado);
          echo '<tr>
            <td>'.$fila['idEmpleado'].'</td>
            <td>'.$fila['dni'].'</td>
            <td>'.$fila['nombre'].'</td>
            <td>'.$fila['email'].'</td>
            <td>'.$fila['telefono'].'</td>
            <td><a href="php/opciones.php?irA=1&idModificar='.$fila['idEmpleado'].'&dniModificar='.$fila['dni'].
            '&nombreModificar='.$fila['nombre'].'&emailModificar='.$fila['email'].'&telefonoModificar='.$fila['telefono'].'">Modificar</a></td>
            <td><a href="php/opciones.php?irA=2&filaBorrar='.$fila['idEmpleado'].'">Borrar</a></td>
          </tr>';
        }
        echo '</table>';
      }
      echo '<a class="boton" href="/crudempleados/index.php">Volver</a>';
    }
  }
?>
