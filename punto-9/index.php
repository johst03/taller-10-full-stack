<?php
	// DECLARACION DE VARIABLES
	$number = 0;
	$i = 0;

	//PROCESO
	$number = readline("Digite el numero a multiplicar -> ");

	echo "\n";

	//OUTPUT
	while($i <= 30) {
		$result = $number * $i;
		echo $number . " x " . $i . " = " . $result . "\n";
		$i++;
	}
?>