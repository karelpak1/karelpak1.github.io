<div id="header">
	<div>
		<a href="index.html" id="logo">
            <img src="images/logo.png" alt="logo">
        </a>
		<ul>
            <?php
            $stranky = ["uvod"=>"Home", "fotogalerie"=>"Fotogalerie", "blog"=>"Blog", "about"=>"O nás", "kontakt"=>"Kontakt"];

            foreach ($stranky as $soubor => $nazevpolozky) {
                //soubor = uvod.php / fotogalerie.php / blog.php / about.php / kontakt.php
                //nazevpolozky = Home / Fotogalerie / Blog / O nás / Kontakt

                echo "<li>";
                echo "<a href='index.php?strana=$soubor'>$nazevpolozky</a>";
                echo "</li>";
            }
            ?>
        </ul>
	</div>
</div>