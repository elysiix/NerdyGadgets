<?php
session_start();


if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach ($_SESSION as $keys => $values)
        {
            if($values["id"] == $_GET["id"])
            {
                unset($_SESSION[$keys]);
                echo 'product is succesvol verwijderd';
                echo 'klik hier om terug te gaan';
                print("<td><a href='cartList.php'>Product lijst</a>");

            }
        }
    }
}

if($_GET["action"] == "update")
{
    foreach ($_SESSION as $keys => $values)
    {
        if($values["id"] == $_GET["id"])
        {
            $_SESSION[$values['name']]['id'] = $values['quantity'];
            echo 'winkelmandje is succesvol geupdate';
            echo 'klik hier om terug te gaan';
            print("<td><a href='cartList.php'>Product lijst</a>");
        }
    }
}

if($_GET["action"] == "destroy")
{
    foreach($_SESSION as $keys => $values)
    {
        session_destroy();
        echo 'winkelmandje is succesvol verwijderd';
        echo 'klik hier om terug te gaan';
        print("<td><a href='cartList.php'>Product lijst</a>");

    }
}