<!DOCTYPE html>
<html>
  <head>
    <title>Prosty kalkulator - wynik</title>
  </head>
  <body>
    <h1>Prosty kalkulator - wynik</h1>
    <?php
      $number1 = $_POST["number1"];
      $number2 = $_POST["number2"];
      $operation = $_POST["operation"];
      
      if ($operation == "add") {
        $result = $number1 + $number2;
        $operation_name = "Dodawanie";
      } elseif ($operation == "subtract") {
        $result = $number1 - $number2;
        $operation_name = "Odejmowanie";
      } elseif ($operation == "multiply") {
        $result = $number1 * $number2;
        $operation_name = "Mnożenie";
      } elseif ($operation == "divide") {
        $result = $number1 / $number2;
        $operation_name = "Dzielenie";
      } else {
        echo "<p>Błędne dane</p>";
        exit();
      }
      
      echo "<p>{$operation_name} {$number1} i {$number2} wynosi {$result}</p>";
    ?>
  </body>
</html>
