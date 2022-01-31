<div id="footer">
		<div>
			<p>
				&#169; 2022 ZahradkyOdProfesionalu. Všechny práva vyhrazena.
                <?php
                    date_default_timezone_set("Europe/Prague");
                    echo "<br>";
                    $mesice = [1 => 'leden', 'únor', 'březen', 'duben', 'květen',
                        'červen', 'červenec', 'srpen', 'září', 'říjen',
                        'listopad', 'prosinec'];

                    $dny = ['neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'];

                    echo "Dnes je ".$dny[date("N")]." ".date("j. ").$mesice[date("n")].date(" Y".".");
                    echo "<br>";
                    echo "Vaše IP adresa je ".$_SERVER['REMOTE_ADDR'];
              ?>
			</p>
			<div class="connect">
				<a href="kontakt.php" id="kontakt">kontakt</a> <a href="https://www.facebook.com/" id="facebook">facebook</a> <a href="https://twitter.com/" id="twitter">twitter</a>
			</div>
		</div>
</div>