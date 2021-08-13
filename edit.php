<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
if(!empty($_POST)){

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $_SESSION['flash']['danger'] = "Les mots de passes ne correspondent pas";
    }else{
        $user_id = $_SESSION['auth']->id;
        $password= password_hash($_POST['password'], PASSWORD_BCRYPT);
        require_once 'inc/db.php';
        $pdo->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$password, $user_id]);
        $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
    }

}
require 'inc/header.php';
?>

<?php


      $db = new PDO('mysql:host=localhost;dbname=amazonreview', 'root', '');
    $req = $db->prepare('UPDATE nom, prix, date_achat, url, demande, revente, remboursement_complet, frais_paypal, date_review, etat FROM produits WHERE id = ?');
    $req->execute(array($_GET['id']));


  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prix = $_POST["prix"] ;
  //adresse:
  $etat = $_POST["etat"] ;
  //code postal:
  $url = $_POST["url"] ;
 
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE personnes
            SET nom         = '$nom', 
	          prix     = '$prix',
		  etat    = '$etat',
		  url           = '$url'
           WHERE id = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }



?>


<?php require 'inc/footer.php'; ?>