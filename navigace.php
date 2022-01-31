<div id="header">
	<div>
		<a href="index.php" id="logo">
            <img src="images/logo.png" alt="logo">
        </a>
		<ul>
            <?php
            // Název v URL adrese, provázaný na kliknutelný odkaz s textem
            $stranky = ["uvod"=>"Home", "fotogalerie"=>"Fotogalerie", "blog"=>"Blog", "about"=>"O nás", "kontakt"=>"Kontakt"];

            foreach ($stranky as $soubor => $nazevmenu) {
                //soubor = uvod.php / fotogalerie.php / blog.php / about.php / kontakt.php
                //nazevmenu = Home / Fotogalerie / Blog / O nás / Kontakt

                // TODO: class="selected" na aktuální stránce. Jinak bez classu
                echo "<li class='selected'";
                echo ">";
                echo "<a href='index.php?strana=$soubor'>$nazevmenu</a>";
                echo "</li>";
            }
            ?>
        </ul>
	</div>
</div>
