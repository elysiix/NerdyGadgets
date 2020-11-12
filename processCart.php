<?php

session_start();

$name = $_POST["hidden_name"];
$qty = $_POST["quantity"];
$price = $_POST["hidden_price"];

$product = array("name" => $name, "quantity"=> $qty, "price" => $price);

$_SESSION[$name] = $product;

print_r($product);

header('location:cartList.php');
