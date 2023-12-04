<?php
  include "./passwordUtils.php";

  $user = readline("Digita tu usuario a registrar -> ");
  $password = readline("Digita tu contraseña a registrar -> ");

  if(hasSecurityLong($password)){
    echo "\n¡Enhorabuena! Tu contraseña tiene la lingitud requerida";

    if(hasUpperLatter($password)) {
      echo "\n¡Que bueno! Tu contraseña contiene almenos una mayuscula";
      
      if(hasNumber($password)) {
        echo "\n¡Muy bien! Tu contraseña contiene numeros";
      }else {
        echo "\n¡Lo sentimos! Tu contraseña no contiene numeros";
      }
    }else {
      echo "\n¡Lo sentimos! Tu contraseña no contiene mayusculas";
    }
  }else{
    echo "\n¡Lo sentimos! Tu contraseña no contiene la longitud requerida";
  }
?>