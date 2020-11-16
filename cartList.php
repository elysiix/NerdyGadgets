<!DOCTYPE html>
<html lang="en" style="background-color: rgb(35, 35, 47);">
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
    <link rel="stylesheet" href="Public/CSS/Style.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/nha3fuq.css">
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
session_start();

?>

<table>
    <thead>
    <tr>
        <th>Foto</th>
        <th>Naam</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>Acties</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php

        if(isset($_SESSION)) {
            foreach ($_SESSION as $key => $values) {
                ?>
                <td><?php echo $values['id'] ?></td>
                <td><?php echo $values['name'] ?></td>
                <td><?php echo $values['quantity']?></td>
                <form action="deleteCart.php?action=update&id=<?php echo $values['id']?>" method="post">
                    <input type="number" class="form-control" name="quantity[<?php echo $values; ?>]" value="<?php echo $values['quantity'] ?>" min="1">
                    <input type="submit" name="submit" class="btn btn-primary btn-sm">
                </form>
                <td><?php echo $values['price'] ?></td>
                <?php
                print("<td><a href=\"deleteCart.php?action=delete&id=" . $values['id'] . "\">Verwijder Product</a></td>");
                print("<td><a href=\"deleteCart.php?action=destroy\">Verwijder winkelmandje</a></td>");

            }
        }
        else
        {
            print("Er is nog niks in het winkelmandje toegevoegd");
        }

        ?>
    </tr>
    </tbody>
</table>
