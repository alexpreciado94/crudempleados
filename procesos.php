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
          <td><a href="modificar.php?filaModificar='.$fila['idEmpleado'].'">Modificar</a></td>
          <td><a href="borrar.php?filaBorrar='.$fila['idEmpleado'].'">Borrar</a></td>
        </tr>';
      }
      echo '</table>';
    }
    function anadir($id, $dni, $nombre, $email, $telefono){
      $sql = "insert into empleados values (".$id.", '"
      .$dni."', '".$nombre."', '".$email."', '".$telefono."')";
      $resultado = $this->conexion->consultar($sql);
    }
    function modificar($id, $dni, $nombre, $email, $telefono){
      $sql = "update empleados set dni='"
      .$dni."', nombre='".$nombre."', email='"
      .$email."', telefono='".$telefono."'
      where idEmpleado=".$id.";";
      $resultado = $this->conexion->consultar($sql);
      header('Location: ../crudempleados/index.php');
    }
    function borrar($borrarId){
      $sql = "delete from empleados where idEmpleado=".$borrarId;
      $resultado = $this->conexion->consultar($sql);
      header('Location: ../crudempleados/index.php');
    }
  }
?>
