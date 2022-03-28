<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>
    <?php
        $titulky = ["index"=>"SAMOSTATNÁ PRÁCE Č.3", "counter"=>"Počítadlo přístupů", "kniha_navstev"=>"Kniha návštěv", "vloz"=>"Práce s DB - VLOŽ", "zobraz"=>"Práce s DB - ZOBRAZ", "seskup"=>"Práce s DB - SESKUP", "smaz"=>"Práce s DB - SMAŽ", "vyhledej"=>"Práce s DB - VYHLEDEJ"];

        if (isset($_GET["strana"])) {
            $str = $_GET["strana"];
            echo "$titulky[$str]";
        } else {
            echo "SAMOSTATNÁ PRÁCE Č.3";
        }
    ?>
      
   </title>
</head>

<body>
  <header>
    <h1>SAMOSTATNÁ PRÁCE Č.3</h1>
    <h2>Autor: Karel Janoušek</h2>
    </header>
    <nav>
      <ul>
      <li><a href="index.php">Počitadlo přístupů</a></li>
        <li><a href="index.php?strana=kniha_navstev">Kniha návštev</a></li>
        <li>Práce s databází
          <ul>
            <li><a href="index.php?strana=vloz">Vkládání</a></li>
            <li><a href="index.php?strana=zobraz">Zobrazení</a></li>
            <li><a href="index.php?strana=seskup">Seskupení</a></li>
            <li><a href="index.php?strana=smaz">Smaž</a></li>
            <li><a href="index.php?strana=vyhledej">Vyhledej</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  <article>
        <hr>
        <?php if (isset($_GET["strana"])) {
            $str = $_GET["strana"];
            include_once "$str.php";
        }
        else {
            include_once 'counter.php';
        }
        ?>
    </article>
  <?php require 'footer.php'; ?>