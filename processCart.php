<?php

session_start();

$id = $_POST['hidden_id'];
$name = $_POST["hidden_name"];
$qty = $_POST["quantity"];
$price = $_POST["hidden_price"];
//$image = $_POST['hidden_image'];


if($_SESSION[$name] >= 1)
{
    foreach ($_SESSION as $value)
    {
       $test = $value['quantity'] + $qty;

       $total = $price * $qty;

       $product = array("id" => $id, "name" => $name, "quantity"=> $test, "price" => $total);

        $_SESSION[$name] = $product;

        header('location:cartList.php');

    }
}
elseif($qty < 1)
{
    print("Je kan niet minder dan 1 artikel bestellen klik hier om terug te gaan <br>");
    print("<a href=addProduct.php>Product toevoegen</a>");
}
else
{
    $product = array("id" => $id, "name" => $name, "quantity"=> $qty, "price" => $price);

//    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $product);

    $_SESSION[$name] = $product;

    header('location:cartList.php');
}
