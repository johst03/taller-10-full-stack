<?php
  $numberArray = array();
  $arraySize = readline("De que longitud quieres que sea tu arreglo? -> ");

  echo "\n";

  for ($i = 0; $i < $arraySize; $i++) {
    $num = readline("Digita el número que ira en la pocision $i del array -> ");
    $numberArray[$i] = $num;
  }

  foreach($numberArray as $number){
    $suma = $suma + $number;
  }

  echo "\nLa sumatoria de los numeros del array es: " . number_format($suma);
?>