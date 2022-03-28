<?php
include 'pripoj.php';

if (isset($_POST["sloupec"])) {
    $sloupec = $_POST["sloupec"];
    $razeni = $_POST["razeni"];

    $dotaz = "SELECT * FROM data3 ORDER BY $sloupec $razeni";
    $vysledek = mysqli_query($condb, $dotaz);
        // prijmeni, jmeno, pohlavi, skupina, vzdelani, obec, kraj

    echo "<table>";
    echo "<tr><td>Příjmení</td><td>Jméno</td><td>Pohlaví</td><td>Skupina</td><td>Vzdělání</td><td>Obec</td><td>Kraj</td></tr>";
    while($radek = mysqli_fetch_array($vysledek)) {
        echo "<tr><td>$radek[prijmeni]</td><td>$radek[jmeno]</td><td>$radek[pohlavi]</td><td>$radek[skupina]</td><td>$radek[vzdelani]</td><td>$radek[obec]</td><td>$radek[kraj]</td></tr>";
    }
}
echo "</table>";
?>
<form method="post">

<label for="sloupec">
Sloupce:
</label>
    <select name="sloupec">
        <option value="prijmeni">Příjmení</option>
        <option value="jmeno">Jméno</option>
        <option value="pohlavi">Pohlaví</option>
        <option value="skupina">Skupina</option>
        <option value="vzdelani">Vzdělání</option>
        <option value="obec">Obec</option>
        <option value="kraj">Kraj</option>
    </select><br><br>
<label for="razeni">
Řazení:
</label>
    <select name="razeni">
        <option value="ASC">ASC</option>
        <option value="DESC">DESC</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Seřaď!">
    </form>