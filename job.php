<div id="body" class="kontakt">
	<div>
        <div>
        <?php
            // FORMULÁŘ
            if (isset($_POST["submit"])){
                
                if (!isset($_POST["sklad"]) AND !isset($_POST["delnik"]) AND !isset($_POST["ucetni"]) AND !isset($_POST["design"])) {
                    echo "Prosím, vyplňte práci, kterou chcete vykonávat";
                } else {
                    if (!isset($_POST["vzdelani"])){
                        echo "Prosím, vyberte Vaše vzdělání";
                    } else {    
                
                // ELIMINACE SQL INJECTION (Pokud by bylo v plánu dělat SQL databázi na formuláře a ukládání dat)
                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
                    // NAČTENÍ VYPLNĚNÝCH ÚDAJŮ
                    $jmeno = test_input($_POST["jmeno"]);
                    $prijmeni = test_input($_POST["prijmeni"]);
                    $datum = $_POST["datum"];
                    $tel = $_POST["tel"];
                    $email = test_input($_POST["email"]);
                    $vzdelani = $_POST["vzdelani"];
                    $Pohlaví = $_POST["Pohlaví"];
                    $informace = $_POST["informace"];

                    // VÝPIS PO ODESLÁNÍ FORMULÁŘE
                    echo "<h3>Vyplněné údaje</h3>";
                    echo "Jméno a příjmení: $jmeno $prijmeni<br>";
                    echo "Dnešní datum: $datum<br>";
                    echo "Telefon: $tel<br>";
                    echo "Email: $email<br>";
                    echo "Má zájem o:<br>";
                    if (isset($_POST["sklad"])) {
                        echo "- $_POST[sklad]<br>";
                    }
                    if (isset($_POST["delnik"])) {
                        echo "- $_POST[delnik]<br>";
                    }
                    if (isset($_POST["ucetni"])) {
                        echo "- $_POST[ucetni]<br>";
                    }
                    if (isset($_POST["design"])) {
                        echo "- $_POST[design]<br>";
                    }
                    echo "Vzdělání: $vzdelani<br>";
                    echo "Pohlaví: $Pohlaví<br>";
                    echo "Informace o Vás:<br>$informace";
                }
            }
            } else {
            ?>
            <div>
                <h3>Hledáš práci?</h3>
                <h4>Vyplň tento formulář, my se ti brzy ozveme!</h4>
            </div>
            <form method="post">
            <!-- Vyplňování údajů -->
            <fieldset>
            <legend>Žádost</legend>
            <label for="jm">Jméno: </label>
            <input type="text" size="25" id="jm" name="jmeno" required>
            <br>
            <br>
            <label for="pr">Příjmení: </label>
            <input type="text" size="25" id="pr" name="prijmeni"required>
            <br>
            <br>
            <label for="date">Dnešní datum: </label>
            <input type="date" id="date" name="datum" required>
            <br>
            <br>
            <label for="tel">Telefon: </label>
            <input type="tel" id="tel" name="tel">
            <br>
            <br>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            <br>
            <br>
            Pohlaví:
            <br>
            <!-- Výběr pohlaví -->
            <input type="radio" name="Pohlaví" value="Muž" id="muz" checked><label for="muz">Muž</label> <br>
            <input type="radio" name="Pohlaví" value="Žena" id="zena"><label for="zena">Žena</label><br><br>
            Mám zájem o práci jako:
            <br>
            <!-- Výběr jobu -->
            <input type="checkbox" name="sklad" value="Skladník" id="sklad"><label for="sklad">Skladník</label><br>
            <input type="checkbox" name="delnik" value="Dělník" id="delnik"><label for="delnik">Dělník</label><br>
            <input type="checkbox" name="ucetni" value="Účetní" id="ucetni"><label for="ucetni">Účetní</label><br>
            <input type="checkbox" name="design" value="Designer" id="design"><label for="design">Designer</label><br><br>
            Vzdělání:
            <br>
            <!-- Vzdělání -->
            <select name="vzdelani">
                <option disabled selected value></option>
                <option value="Základní">Základní</option>
                <option value="Střední odborné">Střední odborné</option>
                <option value="Gymnázium">Gymnázium</option>
                <option value="Bakalářské">Bakalářské</option>
            </select>
            <br>
            <!-- textové pole -->
            <label for="informace">Informace o Vás:</label><br>
            <textarea id="informace" name="informace" rows="10" cols="50" placeholder="Něco o Vaši maličkosti." maxlength="2000" required></textarea>

            <!-- Odeslat -->
            <br>
            <input type="submit" name="submit" value="Odeslat">
            </fieldset>
            </form>
        <?php
            }
        ?>
        </div>
	</div>
</div>