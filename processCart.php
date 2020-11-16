<?php

session_start();

$id = $_POST["hidden_id"];
$name = $_POST["hidden_name"];
$qty = $_POST["quantity"];
$price = $_POST["hidden_price"];


if($qty > 1)
{
    $total = $price * $qty;

    $product = array("id" => $id, "name" => $name, "quantity"=> $qty, "price" => $total);

//    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $product);
}
else
{
    $product = array("id" => $id, "name" => $name, "quantity"=> $qty, "price" => $price);

//    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $product);
}

$_SESSION[$name] = $product;

header('location:cartList.php');
