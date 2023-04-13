<?php

$path = $_POST['path'];
$dir_name = $_POST['dir_name'];
$operation = $_POST['operation'] ?? 'read';

if ($operation == 'create') {
    if (!file_exists($path . '/')) {
        echo "Ścieżka nie istnieje.";
        exit();
    }
    $new_dir = $path . '/' . $dir_name;
    if (file_exists($new_dir)) {
        echo "Katalog już istnieje.";
    } elseif (mkdir($new_dir)) {
        echo "Katalog został utworzony.";
    } else {
        echo "Wystąpił błąd podczas tworzenia katalogu.";
    }
} elseif ($operation == 'delete') {
    $target_dir = $path . '/' . $dir_name;
    if (!file_exists($target_dir)) {
        echo "Katalog nie istnieje.";
        exit();
    }
    if (!is_dir($target_dir)) {
        echo "Podana ścieżka nie jest katalogiem.";
        exit();
    }
    if (count(scandir($target_dir)) == 2) {
        rmdir($target_dir);
        echo "Katalog został usunięty.";
    } else {
        echo "Katalog nie jest pusty.";
    }
} else {
    if (!file_exists($path . '/')) {
        echo "Ścieżka nie istnieje.";
        exit();
    }
    $dir = new DirectoryIterator($path);
    $files = array();
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            $files[] = $fileinfo->getFilename();
        }
    }
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li>$file</li>";
    }
    echo "</ul>";
}
