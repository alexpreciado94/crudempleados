<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Empleados PHP</title>
  </head>
  <body>
    <?php
      include_once 'procesos.php';
      $procesoBorrar = new Procesos();
      $filaBorrar = $_GET['filaBorrar'];

      echo '<form method="POST">
        <label>¿Esta sequro que quiere borrar al empleado '.$filaBorrar.'?</label>
        <input type="submit" name="si" value="SI" />
        <input type="submit" name="no" value="NO" />
      </form>';
      if(isset($_POST['si'])){
        $procesoBorrar->borrar($filaBorrar);
        header('Location:index.php');
      }
      if(isset($_POST['no'])){
        header('Location:index.php');
      }
    ?>
  </body>
</html>
