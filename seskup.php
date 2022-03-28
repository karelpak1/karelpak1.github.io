<h1>Práce s DB - SESKUP</h1>

<?php
require 'pripoj.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sloupec = $_POST["sloupecek"];


    $dotaz = "SELECT COUNT($sloupec),$sloupec FROM data3 GROUP BY $sloupec ";
    $vysledek = mysqli_query($condb, $dotaz);
                echo "<table>";
                echo "<tr><th>$sloupec</th><th>Počet</th></tr>";
                while ($radek = mysqli_fetch_array($vysledek)){
                    echo "<tr><td>$radek[$sloupec]</td><td>$radek[0]</td></tr>";
                }
                echo "</table>";
            }
?>

<br>
<hr>

<?php
if (!isset($_POST['sloupecek']))
  echo "<h3>Vyberte způsob řazení</h3>";
?>
<form method="post">
  <br>
    <label for="sloupecek">
        Seskupit:
    </label>
    <select name="sloupecek" >
        <option value="prijmeni">Příjmení</option>
        <option value="jmeno">Jméno</option>
        <option value="pohlavi">Pohlaví</option>
        <option value="skupina">Skupina</option>
        <option value="vzdelani">Vzdělaní</option>
        <option value="obec">Obec</option>
        <option value="kraj">Kraj</option>
    </select>
    <input type="submit" value="Seskup!">
</form>