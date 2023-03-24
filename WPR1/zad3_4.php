<?php
function checkPrime($num)
{
   $loopCounter = 0;
   
   if ($num == 1){
        echo 'Loops: ' . $loopCounter . "\n";
      	return false;
   }
   
   for ($i = 2; $i <= $num/2; $i++)
   {
      $loopCounter += 1;
      if ($num % $i == 0){
        echo 'Loops: ' . $loopCounter . "\n";
      	return false;
      }
   }
   echo 'Loops: ' . $loopCounter . "\n";
   return true;
}

checkPrime(11);
checkPrime(12);
?>
