<div id="footer">
	<div>
		<p>
		    &#169; 2022 ZahradkyOdProfesionalu. Všechny práva vyhrazena.
            <?php
                date_default_timezone_set("Europe/Prague");
                echo "<br>";
                $mesice = [1 => 'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen','listopad', 'prosinec'];
                $dny = ['neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'];

                    echo "Dnes je ".$dny[date("N")]." ".date("j. ").$mesice[date("n")].date(" Y".".");
                    echo "<br>";
                    echo "Vaše IP adresa je ".$_SERVER['REMOTE_ADDR'];
            ?>
		</p>
        <div class="connect">
            <a href="kontakt.php" id="kontakt">
<<<<<<< HEAD
                Kontakt
            </a>
            <a href="https://www.facebook.com/" id="facebook">
                Facebook
            </a>
            <a href="https://twitter.com/" id="twitter">
                Twitter
=======
                kontakt
            </a>
            <a href="https://www.facebook.com/" id="facebook">
                facebook
            </a>
            <a href="https://twitter.com/" id="twitter">
                twitter
>>>>>>> 26714ac9c048200a3c6b5d4f56219edc07a235dc
            </a>
        </div>
	</div>
</div>