<?php
  class Procesos{
    function __construct(){
      include_once 'conexion.php';
      $this->conexion = new Conexion();
      $this->listar($this->conexion);
    }
    function listar($conexionDB){
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
          <td>'.$fila['id'].'</td>
          <td>'.$fila['dni'].'</td>
          <td>'.$fila['nombre'].'</td>
          <td>'.$fila['email'].'</td>
          <td>'.$fila['telefono'].'</td>
          <td><a href="modificar.html?'.$fila[i].'">Modificar</a></td>
          <td><a href="borrar.php?'.$fila[i].'">Modificar</a></td>
        </tr>';
      }
      echo '</table>';
    }
    function anadir($formularioAnadir){
      $sql = 'insert into empleados values ('.$formularioAnadir['newId'].', '
      .$formularioAnadir['newDNI'].', '.$formularioAnadir['newNombre'].', '
      .$formularioAnadir['newEmail'].', '.$formularioAnadir['newTelefono'].');';
      $resultado = $this->conexion->consultar($sql);
    }
    function modificar(){
      $sql = 'select * from empleados';
      $resultado = $this->conexion->consultar($sql);

      header('Location:index.php');
    }
    function borrar(){
      $sql = 'select * from empleados';
      $resultado = $this->conexion->consultar($sql);

      header('Location:index.php');
    }
  }
?>
