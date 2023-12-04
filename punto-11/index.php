<?php
  //PROCESO 
  for($i = 1; $i <= 100; $i = $i + 2) {
    echo $i . "\n";

    $sum = $sum + $i;
  }

  // OUTPUT
  echo "\nLa sumatoria de todos los numeros impares del 1 al 100 es: " . $sum; 
?>