<?php
   $string = "Hi I'm Hasan";
   $needle = 'H';
   $isWPresent = strpos($string, $needle);

   if(($needle == '') || ($needle == ' ')){     //check whitespace
    $needle = "' '";
    }

   if($isWPresent !== false){     //check letters
    echo "{$needle} is present";
   }
   else{
    echo "{$needle} is not present";
   }


      
      
    