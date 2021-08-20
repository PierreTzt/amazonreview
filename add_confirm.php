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
$demande = $_POST["demande"];
$revente = $_POST["revente"];
$remboursement_complet = $_POST["remboursement_complet"];
$frais_paypal = $_POST["frais_paypal"];
$etat = $_POST["etat"];
$username = $_POST["username"];


$db = App::getDatabase()->query("INSERT INTO products(name,purchase_date,review_date,price,url,username) VALUES('$name','$purchase_date','$review_date','$price','$url','$username')");

?>