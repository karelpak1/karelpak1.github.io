<h1>Počitadlo přístupů</h1>
<?php
include 'pripoj.php';
$ip = $_SERVER["REMOTE_ADDR"];
$dotaz = "INSERT INTO `counter` (`ip_adr`,`datum_a_cas`) VALUES ('$ip',NOW());";

if (mysqli_query($condb, $dotaz)) {
        echo "✅ Přístup na server zaznamenán 👌";
    } 
    else {
        echo "❌ ERROR: ".mysqli_error($condb);
    }

// Prostě získáme maximum z autoinkrementace
$dotaz = "SELECT MAX(poradi_navstiveni) FROM `counter`";
$vysledekcount = mysqli_query($condb, $dotaz);
$radek = mysqli_fetch_row($vysledekcount);

echo '<h2>1. způsob:</h2>'.$radek[0];
// Spočítání všech řádků
$dotaz = "SELECT * FROM `counter`";
$vysledek = mysqli_query($condb, $dotaz);
$vysledekcount = mysqli_num_rows($vysledek);

echo '<h2>2. způsob:</h2>'.$vysledekcount;

?>