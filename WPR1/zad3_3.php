<?php
function multiplicationTable($length) {
    for ($i = 1; $i <= $length; $i++) {
        for ($j = 1; $j <= $length; $j++) {
            $result = $i * $j;
            echo $result . " ";
        }
        echo "\n";
    }
}

multiplicationTable(10);
?>
