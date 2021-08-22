<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
require 'inc/header.php';
$utilisateur = $_SESSION['auth']->id;

$name = $_POST["name"];
$purchase_date = $_POST["purchase_date"];
$review_date = $_POST["review_date"];
$price = $_POST["price"];
$url = $_POST["url"];

$username = $_POST["username"];
$expectancy = implode(",",$_POST['expectancy']);
$refund_type = implode(",",$_POST['refund_type']);
if(isset($_POST["resale"]))
{
    $resale = $_POST["resale"];
    $db = App::getDatabase()->query("INSERT INTO products(name,purchase_date,review_date,price,url,username,refund_type,resale,expectancy) VALUES('$name','$purchase_date','$review_date','$price','$url','$username','$refund_type','$resale','$expectancy')");
}
else{
    $db = App::getDatabase()->query("INSERT INTO products(name,purchase_date,review_date,price,url,username,refund_type,expectancy) VALUES('$name','$purchase_date','$review_date','$price','$url','$username','$refund_type','$expectancy')");
}
?>