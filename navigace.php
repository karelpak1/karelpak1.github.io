<div id="header">
	<div>
<<<<<<< HEAD
		<a href="index.php" id="logo">
=======
		<a href="index.html" id="logo">
>>>>>>> 26714ac9c048200a3c6b5d4f56219edc07a235dc
            <img src="images/logo.png" alt="logo">
        </a>
		<ul>
            <?php
<<<<<<< HEAD
            // Název v URL adrese, provázaný na kliknutelný odkaz s textem
            $stranky = ["uvod"=>"Home", "fotogalerie"=>"Fotogalerie", "blog"=>"Blog", "about"=>"O nás", "kontakt"=>"Kontakt"];

            foreach ($stranky as $soubor => $nazevmenu) {
                //soubor = uvod.php / fotogalerie.php / blog.php / about.php / kontakt.php
                //nazevmenu = Home / Fotogalerie / Blog / O nás / Kontakt

                // TODO: class="selected" na aktuální stránce. Jinak bez classu
                echo "<li class='selected'";
                echo ">";
                echo "<a href='index.php?strana=$soubor'>$nazevmenu</a>";
=======
            $stranky = ["uvod"=>"Home", "fotogalerie"=>"Fotogalerie", "blog"=>"Blog", "about"=>"O nás", "kontakt"=>"Kontakt"];

            foreach ($stranky as $soubor => $nazevpolozky) {
                //soubor = uvod.php / fotogalerie.php / blog.php / about.php / kontakt.php
                //nazevpolozky = Home / Fotogalerie / Blog / O nás / Kontakt

                echo "<li>";
                echo "<a href='index.php?strana=$soubor'>$nazevpolozky</a>";
>>>>>>> 26714ac9c048200a3c6b5d4f56219edc07a235dc
                echo "</li>";
            }
            ?>
        </ul>
	</div>
</div>