<?php
switch($_GET['irA']){
  case '1':
    header('Location: /crudempleados/php/modificar.php?idModificar='.$_GET['idModificar'].'&dniModificar='.$_GET['dniModificar'].
    '&nombreModificar='.$_GET['nombreModificar'].'&emailModificar='.$_GET['emailModificar'].'&telefonoModificar='.$_GET['telefonoModificar']);
    break;
  case '2':
    header('Location: /crudempleados/php/borrar.php?filaBorrar='.$_GET['filaBorrar']);
    break;
  case '3':
    header('Location: /crudempleados/php/anadir.php');
    break;
  case '4':
    header('Location: /crudempleados/vistas/vistabuscar.php');
    break;
  default:
    header('Location: /crudempleados/index.php');
    break;
}
