<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
        <?php
            $titulky = ["uvod"=>"Zahrádky od profesionálů", "fotogalerie"=>"Záhrádky - Fotografie", "blog"=>"Zahrádky - Blog", "about"=>"Zahrádky - O nás", "kontakt"=>"Zahrádky - Kontakt"];

            if (isset($_GET["strana"])) {
                $str = $_GET["strana"];
                echo "$titulky[$str]";
            } else {
                echo "Zahrádky od profesionálů";
            }
        ?>
    </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <main>
        <nav>
            <?php include_once 'navigace.php';?>
        </nav>
        <article>
            <?php 
                if (isset($_GET["strana"])) {
                    $str = $_GET["strana"];
                    include_once "$str.php";
                }
                else {
                    include_once 'uvod.php';
                }
            ?>
        </article>
        <footer>
              <?php 
                include_once 'footer.php'; 
              ?>
        </footer>
    </main>
</body>
</html>