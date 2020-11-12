<?php
session_start();
include "connect.php";
?>
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
<body>
<div class="Background">
    <div class="row" id="Header">
        <div class="col-2"><a href="./" id="LogoA">
                <div id="LogoImage"></div>
            </a></div>
        <div class="col-8" id="CategoriesBar">
            <ul id="ul-class">
                <?php
                $Query = "
                SELECT StockGroupID, StockGroupName, ImagePath
                FROM stockgroups
                WHERE StockGroupID IN (
                                        SELECT StockGroupID
                                        FROM stockitemstockgroups
                                        ) AND ImagePath IS NOT NULL
                ORDER BY StockGroupID ASC";
                $Statement = mysqli_prepare($Connection, $Query);
                mysqli_stmt_execute($Statement);
                $HeaderStockGroups = mysqli_stmt_get_result($Statement);

                foreach ($HeaderStockGroups as $HeaderStockGroup) {
                    ?>
                    <li>
                        <a href="browse.php?category_id=<?php print $HeaderStockGroup['StockGroupID']; ?>"
                           class="HrefDecoration"><?php print $HeaderStockGroup['StockGroupName']; ?></a>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="categories.php" class="HrefDecoration">Alle categorieën</a>
                </li>
            </ul>
        </div>
        <ul id="ul-class-navigation">
            <li>
                <a href="browse.php" class="HrefDecoration"><i class="fas fa-search" style="color:#676EFF;"></i> Zoeken</a>
            </li>
        </ul>
    </div>
    <div class="row" id="Content">
        <div class="col-12">
        </div>
    </div>
<!--end navbar code -->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Bonnetje</h2> <br>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Aantal</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Prijs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">4</th>
                        <td>Rakketschietert</td>
                        <td>Mok</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>$40,95</td>
                        <td>$12,95</td>
                    </tr>
                    </tbody>
                </table>
                <a href="index.php"><button type="button" class="btn btn-secondary btn-lg">Terug</button></a>
            </div>

            <div class="col-md">
                <h2>Betaalmethode</h2> <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card w-100 h-100" style="width: 10rem;">
                                <img src="Public\Img\ideal.png" class="card-img-top h-75 w-75 align-self-center" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title w-25"></h5>
                                    <center><button type="button" class="btn btn-primary align-self-center" data-toggle="button" aria-pressed="false">
                                        Selecteer
                                    </button></center>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card w-100 h-100" style="width: 10rem;">
                                <img src="Public\Img\paypal.png" class="card-img-top h-75 w-75 align-self-center" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title w-25"></h5>
                                    <center><button type="button" class="btn btn-primary align-self-center" data-toggle="button" aria-pressed="false">
                                        Selecteer
                                    </button></center>
                                </div>

                            </div>
                            <div class="w-100">
                                Bezorgingsadres
                                <form>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="factuur" name="factuur" class="custom-control-input">
                                    <label class="custom-control-label" for="factuur">Factuuradres</label>
                                </div>

                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="opgeven" name="factuur" class="custom-control-input">
                                <label class="custom-control-label" for="opgeven">Adres opgeven</label>
                            </div>
<!--                            --><?php
//                            if(isset($_POST["opgeven"])){
//
//                            }
//                            ?>
                        </div>
                        </form>


                        <div class="w-100">
                        Afrekenen als
                            <form>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Klant</label>
                        </div>
                    </div>


                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Gast</label>
                    </div>
                        </form>

                    </div>
              
</body>
</html>
