<?php
//zad 1.1
function simulateDice(){
    return rand(1, 6);
}

//zad 1.2
function circleDiameter(int $r){
    return $r * 2;
}

//zad 1.3
function censorSentence($sentence){
    $words = array('kupa' => '****','kurde' => '*****');
    return strtr($sentence, $words);
}

//zad 1.4
function extractBirthday($pesel): string{
    $day = substr($pesel, 4, 2);
    $month = substr($pesel, 2, 2);
    $year = substr($pesel, 0, 2);

    if ($month > 20) {
        $month = $month - 20 < 10
            ? "0" . ($month - 20)
            : $month - 20;
     }

    return "Data urodzenia: $day/$month/$year";
}

//zad 1.5
function triangleArea() {
    $base = readline("Type base: ");
    $height = readline("Type height: ");
    $area = 0.5 * $base * $height;

    echo "The area: " . $area;
  }
  
  function rectangleArea() {
    $length = readline("Type length: ");
    $width = readline("Type width: ");
    $area = $length * $width;

    echo "The area: " . $area;
  }
  
  function trapezoidArea() {
    $base1 = readline("Type first base: ");
    $base2 = readline("Type second base: ");
    $height = readline("Type height: ");
    $area = 0.5 * ($base1 + $base2) * $height;

    echo "The area: " . $area;
  }
  
  $figure = readline("Enter the name of the figure (triangle, rectangle, trapezoid): ");
  
  switch ($figure) {
    case 'triangle':
        triangleArea();
        break;
    case 'rectangle':
        rectangleArea();
        break;
    case 'trapezoid':
        ctrapezoidArea();
        break;
    default:
        echo "Invalid input\n";
  }

//echo simulateDice();
//echo circleDiameter(4);
//echo censorSentence("Ale kurde pogoda brzydka");
//echo extractBirthday(00311306791)
?>
