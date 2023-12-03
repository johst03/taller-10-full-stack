<?php
  // DEDINICION DE VARIABLES
  const TICKET_PAY = 25000;

  // PROCESO
  $personNumber = readline("DIGITE EL NUMERO DE PESONAS QUE ENTRAN A LA BOLERA -> ");
  $membershipType = readline("DIGITE EL TIPO DE MEMBRESIA -> ");

  $totalPay = $personNumber * TICKET_PAY;

  switch (strtoupper($membershipType)) {
    case "A":
      $totalPay *= 0.7;
    break;
    case "B":
      $totalPay *= 0.75;
    break;
    case "C":
      $totalPay *= 0.9;
    break;
    case "D":
      $totalPay *= 0.95;
    break;
    default: 
      echo "\nLO SENTIMOS, USTED NO CUENTA CON NINGUN TIPO DE MEMBRESIA\n";
    break;
  }

  echo "\nEL TOTAL A PAGAR ES $" . number_format($totalPay);
?>