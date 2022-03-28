<h1>Práce s DB - SMAZ</h1>
<?php
include 'pripoj.php';

$jmeno = "";
$prijmeni = "";
if (isset($_POST['jmeno']) || isset($_POST['prijmeni'])) {
    if ($_POST['jmeno'] != "" || $_POST['prijmeni'] != "") {
        $jmeno = $_POST['jmeno'];
        $prijmeni = $_POST['prijmeni'];
        $dotaz = "DELETE FROM data3 WHERE jmeno LIKE '".$jmeno."'  ".(($jmeno != "" && $prijmeni != "") ? "AND" : "OR")."   prijmeni LIKE '".$prijmeni."'";
    if ($result = mysqli_query($condb, $dotaz)) {
        echo "✅ Smazáno ".mysqli_affected_rows($condb)." záznamů.";
    } 
    else {
        echo "❌ Error: ".mysqli_error($condb);
    }
} 
    else {
    echo "⚠️ Je potřeba zadat alespoň jeden údaj!<br>";
    }
}
?>

<form method="post">
    Zadej jméno <input type="text" name="jmeno" value="<?=$jmeno?>"><br><br>
    Zadej příjmení <input type="text" name="prijmeni" value="<?=$prijmeni?>"><br><br>
    <input type="submit" value="Smaž!">
</form>