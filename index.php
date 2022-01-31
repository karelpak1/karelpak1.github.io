<!DOCTYPE html>
<html lang="cs">
<head>
    <!-- Hromada metadat -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Karel Janoušek">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="Seminární práce">
	<title>
        <?php
            // Správné pojmenování stránky v titlu
            $titulky = ["uvod"=>"Zahrádky od profesionálů", "fotogalerie"=>"Záhrádky - Fotografie", "blog"=>"Zahrádky - Blog", "about"=>"Zahrádky - O nás", "kontakt"=>"Zahrádky - Kontakt", "job"=>"Zahrádky - Zaměstnání"];

            if (isset($_GET["strana"])) {
                $str = $_GET["strana"];
                echo "$titulky[$str]";
            } else {
                // pokud neobsahuje žádnou hodnotu, tak je stále na Indexu (uvod)
                echo "Zahrádky od profesionálů";
            }
        ?>
    </title>
    <!-- import css -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <main>
        <nav>
            <?php 
            // Načtení navigace
            include_once 'navigace.php';
            ?>
        </nav>
        <article>
            <?php
                // Načtení správného Articlu pro každou stránku
                if (isset($_GET["strana"])) {
                    $str = $_GET["strana"];
                    include_once "$str.php";
                }
                else {
                    // zase, pokud neobsahuje hodnotu, je na Indexu (uvodu)
                    include_once 'uvod.php';
                }
            ?>
        </article>
        <footer>
              <?php 
                // Načtení footeru
                include_once 'footer.php'; 
              ?>
        </footer>
    </main>
</body>
</html>