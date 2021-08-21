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
// Connexion à la base de données
try
{
    
    try{
      $db = new PDO('mysql:host=localhost;dbname=amazonreview', 'root', '');
   }catch(Exception $e){
      echo "Échec : " . $e->getMessage();
   }
  
    $req = $db->prepare('SELECT id, nom, prix, date_achat, url, demande, revente, remboursement_complet, frais_paypal, date_review, etat FROM produits WHERE id = ?');
    $req->execute(array($_GET['id']));
		
    while ($infos = $req->fetch())
      {
      ?>
 
  <div class="contact container shadow" id="contact_form">        
  <div class="contact row header">
      <h2>Modification de commande</h2>
      <div id="contact_results"></div>
  </div>
<form action="edit_confirm.php?id=4" method="post">
  <div class="contact row body" id="contact_body">
      <div class="contact-elements">
          <ul>
              <li>
              <p class="left">   
              <label for="date_commande">Nom du produit : <span class="req">*</span></label>
              <input type="text" id="nom" value="<?php echo $infos['nom'];?>"name="nom" class="input-field" required="true">
              </p>
              <p class="pull-right">   
              <label for="date_commande">Prix : <span class="req">*</span></label>
              <input type="text" id="prix" value="<?php echo $infos['prix'];?>" name="prix" class="input-field" required="true">
              </p>
              <p>   
              <label for="url">URL</label>
              <input type="text" id="url" value="<?php echo $infos['url'];?>" name="url" class="input-field" required="true">
              </p>
              </li>
              <p class="left">   
              <label for="date_commande">Date d'achat : <span class="req">*</span></label>
              <input type="date" id="date_achat" value="<?php echo $infos['date_achat'];?>" name="date_achat" class="input-field" required="true">
              </p>
              <p class="pull-right">
              <label for="date_review">Date de review : <span class="req">*</span></label>
              <input type="date" id="date_review" value="<?php echo $infos['date_review'];?>" name="date_review" class="tel-number-field long" required="true">
              </p>
              </li>
              <div class="center-btn" style="position:relevant; height:5vh;">
          </ul>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="center-btn" style="position:relevant; height:5vh;">
          <li>
          <input class="btn btn-submit" type="submit" value="Envoyer">

          </form>
          <?php
    } 


// Fin de la boucle pour l'affichage des donnée dans la base de donnée
    $req->closeCursor();

}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>


<?php require 'inc/footer.php'; ?>