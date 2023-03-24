<?php
//zad2.1
function numberFromArray($index) {
  $array = array();

  for ($i = 0; $i <= $index; $i++) {
    $array[] = rand(0, 100);
  }

  return $array[$index];
}

//zad2.2
function checkMyNationality($country){
    $nationalities = array(
      'Poland' => 'Polish',
      'Germany' => 'German',
      'France' => 'French',
      'Italy' => 'Italian',
      'Spain' => 'Spanish'
    );
    
    if(array_key_exists($country, $nationalities)){
      return $nationalities[$country];
    } 
    else {
      return 'Unknown country/nationality';
    }
  }

//echo returnNumberFromArray(7);
//echo checkNationality('Italy');
?>
