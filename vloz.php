<h1>Práce s DB - VLOŽ</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require 'pripoj.php';

    $jmeno = test_input($_POST["jmeno"]);

    $prijmeni = test_input($_POST["prijmeni"]);
    $pohlavi = $_POST["pohlavi"];
    $vzdelani = $_POST["vzdelani"];
    $skupina = $_POST["skupina"];
    $kraj = $_POST["kraj"];
    $obec = test_input($_POST["obec"]);

    $dotaz = "INSERT INTO data3 VALUES ('$prijmeni', '$jmeno', '$pohlavi', '$skupina', '$vzdelani', '$obec', '$kraj')";
    $vysledek = mysqli_query($condb, $dotaz);

    if ($vysledek) {
        echo "✅ Vložení dat se podařilo!";
    } 
    else {
        echo "❌ Vložení dat se nepodařilo!";
    }
} else {
?>

<form method="post">
    <h2>
        Vložte nové údaje
    </h2>
    <label for="jmeno">
        Jméno:
    </label>
    <input type="text" name="jmeno" id="jmeno" required>
    <br>
    <br>
    <label for="prijmeni">
        Příjmení:
    </label>
    <input type="text" name="prijmeni" id="prijmeni" required>
    <br>
    <br>
    <label for="pohlavi">
        Pohlaví:
    </label>
    <input type="radio" name="pohlavi" value="Ž" checked>
    žena
    <input type="radio" name="pohlavi" value="M">
    muž
    <br>
    <br>
    <label for="vzdelani">
        Vzdělání:
    </label>
    <select id="vzdelani" name="vzdelani">
        <option value="ZŠ" selected>
            ZŠ
        </option>
        <option value="SŠ">
            SŠ
        </option>
        <option value="VŠ">
            VŠ
        </option>
    </select> 
    <br>
    <br>
    <label for="skupina">
        Skupina:
    </label>
    <select id="skupina" name="skupina">
        <option value="zaměstnanec" selected>
            Zaměstnanec
        </option>
        <option value="žák/student">
            ŽÁK/STUDENT
        </option>
        <option value="důchodce">
            Důchodce
        </option>
        <option value="OSVČ">
            OSVČ
        </option>
        <option value="nezaměstnaný">
            Nezaměstnaný
        </option>
    </select>
    <br>
    <br>
    <label for="kraj">
        Kraj:
    </label>
    <select name="kraj" >
        <option value="Praha">Praha</option>
        <option value="Středočeský kraj">Středočeský kraj</option>
        <option value="Jihočeský kraj">Jihočeský kraj</option>
        <option value="Plzeňský kraj">Plzeňský kraj</option>
        <option value="Karlovarský kraj">Karlovarský kraj</option>
        <option value="Ústecký kraj">Ústecký kraj</option>
        <option value="Liberecký kraj">Liberecký kraj</option>
        <option value="Královéhradecký kraj">Královéhradecký kraj</option>
        <option value="Pardubický kraj ">Pardubický kraj </option>
        <option value="Kraj Vysočina">Kraj Vysočina </option>
        <option value="Jihomoravský kraj">Jihomoravský kraj </option>
        <option value="Olomoucký kraj">Olomoucký kraj </option>
        <option value="Zlínský kraj">Zlínský kraj </option>
        <option value="Moravskoslezský kraj">Moravskoslezský kraj</option>
    </select>
    <br>
    <br>
    <label for="obec">
        Obec:
    </label>
    <input type="text" name="obec" id="obec" required>
    <br>
    <br>
    <input type="submit" value="Odeslat">
</form>

<?php
}
?>