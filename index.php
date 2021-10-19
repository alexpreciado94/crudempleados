<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados PHP</title>
  </head>
  <body>
    <?php
      include_once 'procesos.php';
      $procesos = new Procesos();
      $procesos->listar();
    ?>
  </body>
</html>
