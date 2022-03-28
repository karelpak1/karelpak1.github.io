<?php
$server = "localhost";
$user = "root";
$passwd = "";
$datab = "prace3";

$condb = mysqli_connect($server, $user, $passwd, $datab);

if (!$condb) {
    die("Chyba připojení: ".mysqli_connect_error().mysqli_connect_errno());
}

mysqli_set_charset($condb, "utf8");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>