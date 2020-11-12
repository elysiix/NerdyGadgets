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
//verbinding
include "connect.php";
//waardes klant
//sql

?>
<body>
<!-- bestellingscode-->
<?php

?>


<form method="post" action="betaald.php">
    <TABLE >
        <TR> <TD><label for="voornaam">Voornaam:</label></TD>
            <TD><input type="text" placeholder="Voornaam" size="20" maxlength="40" name="voornaam"><br></TD>
            <TD><label for="gebdatum">Gebdatum:</label></TD>
            <TD><input type="date" placeholder="Geboortedatum" required size="20" maxlength="40" name="gebdatum"></TD> </TR>
        <TR> <TD><label for="achternaam">Achternaam:</label></TD>
            <TD><input type="text" placeholder="Achternaam" required size="20" maxlength="40" name="achternaam"><br></TD>
            <TD><label for="email">E-mail:</label></TD>
            <TD><input type="text" placeholder="Email" required size="20" maxlength="40" name="email"></TD> </TR>
        <TR> <TD><label for="tussenvoegsel">Tussenvoegsel:</label></TD>
            <TD><input type="text" placeholder="Tussenvoegsel" required size="20" maxlength="5" name="tussenvoegsel"><br></TD>
            <TD><label for="telefoonummer">Telefoon-nummer:</label></TD>
            <TD><input type="text" placeholder="Telefoon-nummer" required size="20" maxlength="11" name="telefoonnmr"></TD>
        <TR><TD><label for="geslacht">geslacht:</label></TD><br>
            <TD><br>Man: <input type="radio" size="10" name="geslacht" value="Man">
                <br>Vrouw: <input type="radio" size="10" name="geslacht" value="Vrouw">
                <br> Anders: <input type="radio" size="10" name="geslacht" value="Anders">
                <br>
            </TD>
        </TR>

    </TABLE>
    <BR><BR><BR>
    <TABLE>
        <TR> <TD><label for="Straatnaam">Straatnaam:</label></TD> <TD><input type="text" placeholder="Straatnaam" required size="20" maxlength="40" name="Straatnaam"></TD>  </TR>
        <TR> <TD><label for="huisnnummer">Huisnnummer:</label></TD> <TD><input type="text" placeholder="huisnnummer" required size="9" maxlength="4" name="huisnnummer"><input type="text" size="5" maxlength="1"  name="toevoeging" placeholder="toevoeging"></TD></TR>
        <TR> <TD><label for="postcode">Postcode:</label></TD> <TD><input type="text" placeholder="postcode" required size="20" maxlength="40" name="postcode"></TD> </TR>
        <TR> <TD><label for="woonplaats">Woonplaats:</label></TD> <TD><input type="text" placeholder="woonplaats" required size="20" maxlength="40" name="woonplaats"></TD></TR>
        <TR> <TD><label>Land:</label></TD> <TD> <select name="land">
                    <option value="AF">Nederland</option>
                </select></TD></TR>
    </TABLE>
    <BR><BR><BR>
    <TABLE>
        <TR> <TD><label for="wachtwoord">Wachtwoord:</label></TD> <TD><input type="password" required size="20" maxlength="40" name="wachtwoord"></TD> </TR>
        <TR> <TD><label for="wachtwoord">Wachtwoord verificatie:</label></TD> <TD><input type="password" required size="20" maxlength="40" name="wachtwoord"> </TD></TR>


    </TABLE>
    <br>
    <label for="Nieuwsbrief">Wilt U zich aan melden voor onze Nieuwsbrief:</label>
    <input type="checkbox"  size="20" name="Nieuwsbrief"><br>

    <label for="voorwaarde"><a href="gebruiksvoorwarde.php">Accepeert u onze algemene voorwaarde*:</label></a>
    <input type="checkbox" required size="20" name="termsofservice"><br>
    <br>


<?php

?>
<br>
<input type="submit" value="Betaal" name="Betaal"/>&nbsp;<input type="reset" value="reset" />
</form>

</body>
</html>