<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
require 'inc/header.php';
$utilisateur = $_SESSION['auth']->id;

$purchase_date = $_POST["purchase_date"];
$review_date = $_POST["review_date"];
$name = $_POST["name"];
$price = $_POST["price"];
$url = $_POST["url"];
$resale = $_POST["resale"];
$refund_type = $_POST["refund_type"];
$frais_paypal = $_POST["frais_paypal"];
$username = $_POST["username"];

$expectancy = implode(",",$_POST['expectancy']);

$db = App::getDatabase()->query("INSERT INTO products(name,purchase_date,review_date,price,url,username,refund_type,resale,expectancy) VALUES('$name','$purchase_date','$review_date','$price','$url','$username','$refund_type','$resale','$expectancy')");
?>