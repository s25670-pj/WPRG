<?php
$array = array();
$max = 0;

for ($i = 0; $i < 10; $i++) {
  $array[] = rand(0, 100);
}

//for
for ($i = 1; $i < count($array); $i++) {
  if ($array[$i] > $max) {
      $max = $array[$i];
  }
}

echo "For loop: " . $max . "\n";

$i = 0;
$max = 0;

//while
while($i < count($array)) {
  if ($array[$i] > $max) {
    $max = $array[$i];
  }
  $i++;
}

echo "While loop: " . $max . "\n";

$i = 0;
$max = 0;

//do while
do {
  if ($array[$i] > $max) {
    $max = $array[$i];
  }
  $i++;
} while ($i < count($array));

echo "Do while loop: " . $max . "\n";

$max = 0;

//foreach
foreach ($array as $value) {
  if ($value > $max) {
    $max = $value;
  }
}

echo "Foreach loop: " . $max;
?>
