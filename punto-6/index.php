<?php
  // PROCESS
  echo "Ingrese su nombre por favor -> ";
  $name = readline();

  echo "Ingrese su edad por favor -> ";
  $age = readline();

  // OUTPUT
  if($age >= 18) {
    echo "\n" . $name . " Eres mayor de edad, puedes entrar.";
  } else {
    echo "\n" . $name . " No puedes entrar, eres menor de edad.";
  }
?>