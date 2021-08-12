<?php
    $serveur = "localhost";
    $dbname = "amazonreview";
    $user = "root";
    $pass = "";
    
    $date_achat = $_POST["date_achat"];
    $date_review = $_POST["date_review"];
    $review_poste = $_POST["review_poste"];
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO produits(date_achat, date_review, review_poste, nom, prix)
            VALUES(:date_achat, :date_review, :review_poste, :nom, :prix)");
        $sth->bindParam(':date_achat',$date_achat);
        $sth->bindParam(':date_review',$date_review);
        $sth->bindParam(':review_poste',$review_poste);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prix',$prix);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        //header("Location:form-merci.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>