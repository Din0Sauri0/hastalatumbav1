<?php
$texto = $_POST["texto"];
$file = fopen("archivo.txt", "a");
fwrite($file, $texto . "\n");
fclose($file);
?>