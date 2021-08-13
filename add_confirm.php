<?php
    $serveur = "localhost";
    $dbname = "amazonreview";
    $user = "root";
    $pass = "";
    
    $date_achat = $_POST["date_achat"];
    $date_review = $_POST["date_review"];
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];
    $url = $_POST["url"];
    $demande = $_POST["demande"];
    $revente = $_POST["revente"];
    $remboursement_complet = $_POST["remboursement_complet"];
    $frais_paypal = $_POST["frais_paypal"];
    $etat = $_POST["etat"];
    $username = $_POST["username"];

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO produits(date_achat, date_review, nom, prix, url, demande, revente, remboursement_complet, frais_paypal, etat, username)
            VALUES(:date_achat, :date_review, :nom, :prix, :url, :demande, :revente, :remboursement_complet, :frais_paypal, :etat, :username)");
        $sth->bindParam(':date_achat',$date_achat);
        $sth->bindParam(':date_review',$date_review);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prix',$prix);
        $sth->bindParam(':url',$url);
        $sth->bindParam(':demande',$demande);
        $sth->bindParam(':revente',$revente);
        $sth->bindParam(':remboursement_complet',$remboursement_complet);
        $sth->bindParam(':frais_paypal',$frais_paypal);
        $sth->bindParam(':etat',$etat);
        $sth->bindParam(':username',$username);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        //header("Location:form-merci.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

?>