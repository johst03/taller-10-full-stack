<?php
  // INPUT
  const TICKET_PRICE = 25000;

  // PROCESS
  echo "Digita el numero de personas que entraran a la bolera -> ";
  $personNumber = readline();

  echo "\nDigita el tipo de membresia -> ";
  $membershipType = strtoupper(readline());

  $totalPay = $personNumber * TICKET_PRICE;

  if($membershipType == "A" || $membershipType == "B") {
    $totalPay = $totalPay * 0.7;
  } else {
    echo "\n¡Lo sentimos! No cuentas con ningún descuento\n";
  }

  // OUTPUT
  echo "\nEl total a pagar es de $" . number_format($totalPay);
?>