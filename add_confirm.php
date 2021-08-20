<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
require 'inc/header.php';
$utilisateur = $_SESSION['auth']->id;


    
$date_achat = $_POST["date_achat"];
$review_date = $_POST["review_date"];
$name = $_POST["name"];
$prix = $_POST["prix"];
$url = $_POST["url"];
$demande = $_POST["demande"];
$revente = $_POST["revente"];
$remboursement_complet = $_POST["remboursement_complet"];
$frais_paypal = $_POST["frais_paypal"];
$etat = $_POST["etat"];
$username = $_POST["username"];


$db = App::getDatabase()->query("INSERT INTO products(name,review_date,url,username) VALUES('$name','$review_date','$url','$username')");

?>