<h1>Práce s DB - VYHLEDEJ</h1>
<?php 
include "pripoj.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["prijmeni"]) or isset($_POST["jmeno"])){
        if($_POST["prijmeni"] !="" and $_POST["jmeno"] != "") {
            $prijmeni = test_input($_POST["prijmeni"]);
            $jmeno = test_input($_POST["jmeno"]);
            $dotaz = "SELECT * FROM data3 WHERE prijmeni = '$prijmeni' AND jmeno = '$jmeno'";
            $vysledek = mysqli_query($condb,$dotaz);
            $pocet = mysqli_num_rows($vysledek);
            if ($pocet > 0){
                $dotaz = "SELECT * FROM data3 WHERE prijmeni = '$prijmeni' AND jmeno = '$jmeno'";
                $vysledek = mysqli_query($condb, $dotaz);
                echo "<table>";
                echo "<tr><th>Příjmení</th><th>Jméno</th><th>Pohlaví</th><th>Skupina</th><th>Vzdělání</th><th>Obec</th><th>Kraj</th></tr>";
                while ($radek = mysqli_fetch_array($vysledek)) {
                    echo "<tr><td>$radek[prijmeni]</td><td>$radek[jmeno]</td><td>$radek[pohlavi]</td><td>$radek[skupina]</td><td>$radek[vzdelani]</td><td>$radek[obec]</td><td>$radek[kraj]</td></tr>";   
                }
                echo "</table>";
            }        
            else {
                echo "Záznam s tímto příjmením a jménem nebyl nalezen.";
            }
        }
        elseif ($_POST["prijmeni"] !="") {
            $prijmeni = test_input($_POST["prijmeni"]);
            $dotaz = "SELECT * FROM data3 WHERE prijmeni = '$prijmeni'";
            $vysledek = mysqli_query($condb,$dotaz);
            $pocet = mysqli_num_rows($vysledek);
            if ($pocet > 0){
                $dotaz = "SELECT * FROM data3 WHERE prijmeni = '$prijmeni'";
                $vysledek = mysqli_query($condb, $dotaz);
                echo "<table>";
                echo "<tr><th>Příjmení</th><th>Jméno</th><th>Pohlaví</th><th>Skupina</th><th>Vzdělání</th><th>Obec</th><th>Kraj</th></tr>";
                while ($radek = mysqli_fetch_array($vysledek)) {
                    echo "<tr><td>$radek[prijmeni]</td><td>$radek[jmeno]</td><td>$radek[pohlavi]</td><td>$radek[skupina]</td><td>$radek[vzdelani]</td><td>$radek[obec]</td><td>$radek[kraj]</td></tr>";   
                }
                echo "</table>";
            }
            else {
            echo "Záznam s tímto příjmením nebyl nalezen.";
            }
        }
        else {
            $jmeno = test_input($_POST["jmeno"]);
            $dotaz = "SELECT * FROM data3 WHERE jmeno = '$jmeno'";
            $vysledek = mysqli_query($condb,$dotaz);
            $pocet = mysqli_num_rows($vysledek);
            if ($pocet > 0){
                $dotaz = "SELECT * FROM data3 WHERE jmeno = '$jmeno'";
                $vysledek = mysqli_query($condb, $dotaz);
                echo "<table>";
                echo "<tr><th>Příjmení</th><th>Jméno</th><th>Pohlaví</th><th>Skupina</th><th>Vzdělání</th><th>Obec</th><th>Kraj</th></tr>";
                while ($radek = mysqli_fetch_array($vysledek)){
                    echo "<tr><td>$radek[prijmeni]</td><td>$radek[jmeno]</td><td>$radek[pohlavi]</td><td>$radek[skupina]</td><td>$radek[vzdelani]</td><td>$radek[obec]</td><td>$radek[kraj]</td></tr>";   
                }
                echo "</table>";
            }
            else {
                echo "Záznam s tímto jménem nebyl nalezen.";
            }
        }
    }
}
else {
    echo "<form method ='post'>";
    echo "Zadej jméno <input type='text' name='jmeno'><br><br>";
    echo "Zadej příjmení <input type='text' name='prijmeni'><br><br>";
    echo "<input type='submit' value='Hledej!'></from><br>";
}
mysqli_close($condb);
?>