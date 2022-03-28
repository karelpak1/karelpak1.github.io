<?php
include 'pripoj.php';
// Potřebuji změnit
// Počítá se pomocí SQL databáze!
$file = fopen("pocet.txt", "r+");

$pocet = fread($file, filesize("pocet.txt")) + 1;
rewind($file);
fwrite($file, $pocet);

fclose($file);

echo "Jste ";
include "pocet.txt";
echo ". návštěvníkem tohoto souboru";

echo "<br>";
echo "Jste $pocet. návštěvníkem tohoto souboru";
?>