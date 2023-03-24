<?php
//zad2.1
function numberFromArray($index) {
  $array = array();

  for ($i = 0; $i <= $index; $i++) {
    $array[] = rand(0, 100);
  }

  return $array[$index];
}

//echo returnNumberFromArray(7);
?>
