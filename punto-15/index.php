<?php
  include "./operationUtils.php";

  // 1. llamar una funcion para pedir los numeros
  $numberOne = getNumber();
  $numberTwo = getNumber();

  // 2. llamar una funcion para mostrar el menu
  $option = showMenu();

  //3. llamar una funcion que seleccione la operacion correcta
  $result = operate($numberOne, $numberTwo, $option);

  // 4. mostrar el resultado
  echo "\nEl resultado de la operacion es: " . $result;
?>