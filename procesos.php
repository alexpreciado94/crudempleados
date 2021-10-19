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
          <td><a href="borrar.html?'.$fila[i].'">Modificar</a></td>
        </tr>';
      }
      echo '</table>';
    }
    function añadir(){
      $sql = 'select * from empleados';
      $resultado = $this->conexion->consultar($sql);
    }
    function modificar(){

    }
    function borrar(){

    }
  }
?>
