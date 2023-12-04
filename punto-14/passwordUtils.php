<?php 
    function hasSecurityLong($pass) {
        return strlen($pass) >= 8;
    }
    
    function hasUpperLatter($pass) {
        foreach(str_split($pass) as $letter) {
          return ctype_upper($letter);
        }
    }
    
    function hasNumber($pass) {
        foreach(str_split($pass) as $number) {
          if(ctype_digit($number)) {
            return true;
          }
        }
    }    
?>