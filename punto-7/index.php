<?php
  //Datos de entrada (Inputs)
  $firstNumber = readline("Digita el primer numero -> ");
  $secondNumber = readline("Digita el segundo numero -> ");
  $typeOperation = strtoupper(readline("Digita la operacion que deseas realizar (+, -, *, /) -> "));

  //Proceso (Aritmeticos)
  switch ($typeOperation) {
    case "+":
      $result = $firstNumber + $secondNumber;
    break;
    case "-":
      $result = $firstNumber - $secondNumber;
    break;
    case "*":
      $result = $firstNumber * $secondNumber;
    break;
    case "/":
      $result = $firstNumber / $secondNumber;
    break;
    default:
      $result = "Operacion no valida";
    break;
  }

  //Datos de salida (Outputs)
  echo "El resultado de la operacion es: " . $result;
?>