<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();


$utilisateur = $_SESSION['auth']->id;

require 'inc/header.php';
?>


<?php

    
    $date_achat = $_POST['date_achat'];
    $date_review = $_POST['date_review'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $url = $_POST['url'];

    try{
        //On se connecte à la BDD
        $dbco = new PDO('mysql:host=localhost;dbname=amazonreview','root', '');
    }catch(Exception $e){
        echo "Échec : " . $e->getMessage();
     }


        //On insère les données reçues
        $sth = $dbco->prepare("
            UPDATE produits SET date_achat = :date_achat, date_review = :date_review, nom = :nom, prix = :prix, url = :url WHERE id = :id");
        $sth->bindParam('date_achat',$date_achat);
        $sth->bindParam('date_review',$date_review);
        $sth->bindParam('nom',$nom);
        $sth->bindParam('prix',$prix);
        $sth->bindParam('url',$url);
        $sth->execute(array());

        $sth = $dbco->prepare('SELECT * FROM produit WHERE id = ?');

        if(!empty($_POST)){
        $req = $cnx->prepare('UPDATE me_utilisateur SET email = :email, site = :site WHERE identifiant = :identifiant');
    $req->execute(array(
    'email' => $_POST'email'],
    'site' => $_POST'site'],
    ':identifiant' => $_SESSION'identifiant']
    ));
}

     
        
        //On renvoie l'utilisateur vers la page de remerciement
        //header("Location:form-merci.html");
    
    
?>

<?php require 'inc/footer.php'; ?>