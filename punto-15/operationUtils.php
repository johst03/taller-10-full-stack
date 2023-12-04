<?php
  // 1. Funcion para poder obtener un numero
  function getNumber() {
    return readline("Ingrese un numero a operar -> \n");
  }

  // 2. Funcion para mostrar menu y retornar respuesta
  function showMenu() {
    return readline("Ingrese la operacion que deseas realizar ya sea (+, -, *, /) -> ");
  }

  // 3. Funcion que realice la operacion correcta
  function operate($x, $y, $option) {
    switch($option) {
      case "+":
        return add($x, $y);
      break;
      case "-":
        return sub($x, $y);
      break;
      case "*":
        return dot($x, $y);
      break;
      case "/":
        return split($x, $y);
      break;
      default:
        echo "\nOpcion no valida";
        return 0;
      break;
    }
  }

  // 4. Funciones por cada operacion
  function add($x, $y) {
    return $x + $y;
  }

  function sub($x, $y) {
    return $x - $y;
  }

  function dot($x, $y) {
    return $x * $y;
  }

  function split($x, $y) {
    return $x / $y;
  }
?>