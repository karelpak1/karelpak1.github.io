<h1>Kniha návštev</h1>

<?php
include 'pripoj.php';
?>

<form method="POST">
    <label for="prezdivka">Vaše přezdívka: </label>
    <input type="text" name="prezdivka" id="prezdivka" size="25" required>
    <br>
    <br>
    <label for="zpravy">Vaše zpráva: </label>
    <br>
    <textarea name="zpravy" cols="60" rows="15" id="zpravy" required></textarea>
    <br>
    <br>
    <input type="submit" value="Odeslat">
</form>
<hr>
<?php

if (isset($_POST['prezdivka'])) {
    $prezdivka =  test_input($_POST['prezdivka']);
    $zpravy = test_input($_POST['zpravy']);

    $dotaz = "INSERT INTO `kniha_navstev` (`datum_a_cas`, `navstevnik`, `zpravy`) VALUES (now(), '$prezdivka', '$zpravy');";

    // Vykonání dotazu
    if (mysqli_query($condb, $dotaz)) {
        echo "✅ Zpráva byla úspěšně zaznamenána 👌<hr>";
    } 
    else {
        echo "❌ ERROR: ". mysqli_error($condb);
        echo "<hr>";
    }
}
// Maximální počet vypsaných zpráv bude 10
$dotaz = "SELECT * FROM `kniha_navstev` ORDER BY `datum_a_cas` DESC LIMIT 10";
$vysledek = mysqli_query($condb, $dotaz);

echo "<br>";
while ($radek = mysqli_fetch_array($vysledek)) {
  echo "<strong>Datum a čas:</strong> $radek[datum_a_cas]<br>";
  echo "<strong>Návštěvník:</strong> $radek[navstevnik]<br>";
  echo "<strong>Zpráva:</strong> $radek[zpravy]<br>";
  echo "<hr>";
}
?>