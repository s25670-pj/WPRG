<?php
$file = 'adresy.txt';

if (($handle = fopen($file, "r")) !== FALSE) {
    $list = '';
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if (count($data) == 2) {
            $list .= '<li><a href="'.$data[0].'">'.$data[1].'</a></li>';
        }
    }

    fclose($handle);
    echo '<ul>'.$list.'</ul>';
}
?>
