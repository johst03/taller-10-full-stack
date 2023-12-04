<?php
  //PROCESO
  $number = readline("Digite el numero a multiplicar -> ");

  echo "\n";

  //OUTPUT
  for($i = 0; $i <= 30; $i++) {
    $result = $number * $i;
    echo $number . " x " . $i . " = " . $result . "\n";
  }
?>