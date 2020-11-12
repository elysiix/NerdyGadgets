<!doctype html>
<html lang="en">
<head>
    <script src="Public/JS/fontawesome.js" crossorigin="anonymous"></script>
    <script src="Public/JS/jquery.min.js"></script>
    <script src="Public/JS/bootstrap.min.js"></script>
    <script src="Public/JS/popper.min.js"></script>
    <script src="Public/JS/Resizer.js"></script>
    <script src="Public/JS/jquery-3.4.1.js"></script>
    <style>
        @font-face {
            font-family: MmrText;
            src: url(/Public/fonts/mmrtext.ttf);
        }
    </style>
    <meta charset="ISO-8859-1">
    <title>NerdyGadgets</title>
    <link rel="stylesheet" href="Public/CSS/bootstrap.min.css" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="Public/Favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Public/Favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Public/Favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Public/Favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Public/Favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Public/Favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Public/Favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Public/Favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Public/Favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="Public/Favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Public/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Public/Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Public/Favicon/favicon-16x16.png">
    <link rel="manifest" href="Public/Favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Public/Favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<?php
include "connect.php";
?>
<body>
<!-- bestellingscode-->

<form method="post" action="checkoutbase.php">
    Wilt u verdergaan als klant of bezoeker? <br>
    <button>Klant</button>
    <a href="checkout-bezoeker"><button>Bezoeker</button></a>
</form>
<?php
if(isset($_POST["betaal"])){
    $sql = "INSERT INTO klant (klantnr, geslacht, voornaam, tussenvoegsel, achternaam, gbdatum, E-mail, telefoonnr, straat, huisnummer, postcode, plaats, land, wachtwoord, nieuwsbrief, factuuradres) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $statement = mysqli_prepare($connection, "INSERT INTO klant (klantnr, geslacht, voornaam, tussenvoegsel, achternaam, gbdatum, E-mail, telefoonnr, straat, huisnummer, postcode, plaats, land, wachtwoord, nieuwsbrief, factuuradres) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $statement = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($statement, 'issssdsisissssbb', $klantnr, $geslacht, $voornaam, $tussenvoegsel, $achternaam, $gbdatum, $Email, $telefoonnummer, $straat, $huisnummer, $postcode, $plaats, $land, $wachtwoord, $nieuwsbrief, $factuuradres);
    mysqli_stmt_execute($statement);


    $result = mysqli_stmt_get_result($statement);
    mysqli_close($connection);
}
?>
<br>
<a href="betaald.php"><button name="betaal" class="large">Betaal</button></a>

</body>
</html>