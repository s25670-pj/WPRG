<?php
function simulateDice($rolls){
    $result = array();
    for ($i = 0; $i < $rolls; $i++) {
        $result[$i] = rand(1, 6);
    }
    return $result;
}
?>
