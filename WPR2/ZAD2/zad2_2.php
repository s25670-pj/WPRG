<?php
function fibonacci_recursive($n) {
    if ($n <= 1) {
      return $n;
    } else {
      return fibonacci_recursive($n - 1) + fibonacci_recursive($n - 2);
    }
  }

  function fibonacci_iterative($n) {
    $fib = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
      $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib[$n];
  }

  $arg = 10;

// pomiar czasu działania funkcji rekurencyjnej
$start_time = microtime(true);
$result_recursive = fibonacci_recursive($arg);
$end_time = microtime(true);
$time_recursive = $end_time - $start_time;

// pomiar czasu działania funkcji nierekurencyjnej
$start_time = microtime(true);
$result_iterative = fibonacci_iterative($arg);
$end_time = microtime(true);
$time_iterative = $end_time - $start_time;

echo "Wynik rekurencyjny: " . $result_recursive . "<br>";
echo "Czas rekurencyjny: " . $time_recursive . " sekund<br>";
echo "Wynik nierekurencyjny: " . $result_iterative . "<br>";
echo "Czas nierekurencyjny: " . $time_iterative . " sekund<br>";

if ($time_recursive < $time_iterative) {
  echo "Funkcja rekurencyjna była szybsza o " . ($time_iterative - $time_recursive) . " sekund.";
} elseif ($time_iterative < $time_recursive) {
  echo "Funkcja nierekurencyjna była szybsza o " . ($time_recursive - $time_iterative) . " sekund.";
} else {
  echo "Obie funkcje działały przez taki sam czas.";
}

?>