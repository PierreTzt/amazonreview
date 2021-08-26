<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
require 'inc/header.php';
$utilisateur = $_SESSION['auth']->id;
$id=$_GET['id'];

$name = $_POST["name"];
$purchase_date = $_POST["purchase_date"];
$review_date = $_POST["review_date"];
$price = $_POST["price"];
$url = $_POST["url"];
$seller_name = $_POST["seller_name"];
$seller_url = $_POST["seller_url"];
$expectancy = implode(",",$_POST['expectancy']);
$refund_type = implode(",",$_POST['refund_type']);
//if(isset($_POST["resale"]))
//{
    //$resale = $_POST["resale"];
    $db = App::getDatabase()->query("UPDATE products SET name = '$name', purchase_date = '$purchase_date', review_date = '$review_date', price = '$price', url = '$url', expectancy ='$expectancy', refund_type = '$refund_type', seller_name = '$seller_name', seller_url = '$seller_url' WHERE id = $id");
//}
//else{
//    $db = App::getDatabase()->query("UPDATE products(name,purchase_date,review_date,price,url,username,refund_type,expectancy,seller_name,seller_url) VALUES('$name','$purchase_date','$review_date','$price','$url','$refund_type','$expectancy','$seller_name','$seller_url') WHERE id = $id");
//}
?>