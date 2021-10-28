<?php
switch($_GET['irA']){
  case '1':
    header('Location: /crudempleados/php/modificar.php');
    break;
  case '2':
    header('Location: /crudempleados/php/borrar.php');
    break;
  case '3':
    header('Location: /crudempleados/php/anadir.php');
    break;
  default:
    header('Location: /crudempleados/index.php');
    break;
}
