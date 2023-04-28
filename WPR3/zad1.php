<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];
    $lines = file($file);
    $reversed_lines = array_reverse($lines);
    $output = implode('', $reversed_lines);
    file_put_contents($file, $output);
}
?>

<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="file" />
    <input type="submit" name="submit" value="Reverse lines" />
</form>
