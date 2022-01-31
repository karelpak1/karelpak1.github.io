<div id="footer">
	<div>
		<p>
		    &#169; 2022 ZahradkyOdProfesionalu. Vytvořil Karel Janoušek
            <?php
                // Nastavení správného časového pásma
                date_default_timezone_set("Europe/Prague");
                echo "<br>";
                // České názvy měsíců
                $mesice = [1 => 'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen','listopad', 'prosinec'];
                // České názvy dnů
                $dny = ['neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'];
                    // Výpis
                    echo "Dnes je ".$dny[date("N")]." ".date("j/").$mesice[date("n")].date("/Y");
                    echo ", čas Vaší poslední návštěvy či aktualizace je ".date("G").' hodin ' .date("i").' minut '.date("s").' vteřin.';
                    echo "<br>";
                    // echo "Vaše IP adresa je ".$_SERVER['REMOTE_ADDR'];
                    echo "Zdroj dat: <a href='https://www.w3schools.com/'>w3schools</a>, <a href='https://pixabay.com/'>pixabay</a> a <a href='https://www.html5rocks.com/'>html5rocks</a>";
            ?>            
		</p>
        <!-- 3 Ikonky => Email + FB + Twitter -->
        <div class="connect">
            <a href='mailto:info@ZahradkyOdProfesionalu.cz' id="kontakt">
                Kontakt
            </a>
            <a href="https://www.facebook.com/" id="facebook">
                Facebook
            </a>
            <a href="https://twitter.com/" id="twitter">
                Twitter
            </a>
        </div>
	</div>
</div>