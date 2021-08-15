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

  <div class="contact container shadow" id="contact_form">        
  <div class="contact row header">
      <h2>Ajout de commande</h2>
      <div id="contact_results"></div>
  </div>


<form action="add_confirm.php" method="post">
  <div class="contact row body" id="contact_body">
      <div class="contact-elements">
          <ul>
              <p>   
              <label for="date_commande">Nom du produit : <span class="req">*</span></label>
              <input type="text" id="nom" name="nom"  class="form-control" required="true">
              </p>
              <p>   
              <label for="date_commande">Prix du produit : <span class="req">*</span></label>
              <input type="text" id="prix" name="prix"  class="form-control" required="true">
              </p>
              <p>   
              <label for="url">Lien du produit</label>
              <input type="text" id="url" name="url"  class="form-control">
              </p>
              <p>   
              <label for="date_commande">Date de commande : <span class="req">*</span></label>
              <input type="date" id="date_achat" name="date_achat"  class="form-control" required="true">
              </p>
              <p>
              <label for="date_review">Date de review : <span class="req">*</span></label>
              <input type="date" id="date_review" name="date_review"  class="form-control" required="true">
              </p>
              <p>   
              <label for="url">Type de demande</label>
              <input type="text" id="demande" name="demande"  class="form-control">
              </p>
              <p>   
              <label for="url">Prévu d'etre revendu</label>
              <input type="text" id="revente" name="revente"  class="form-control">
              </p>
              <p>   
              <label for="url">Remboursement complet</label>
              <input type="text" id="remboursement_complet" name="remboursement_complet"  class="form-control">
              </p>
              <p>   
              <label for="url">Frais PayPal</label>
              <input type="text" id="frais_paypal" name="frais_paypal" class="form-control">
              </p>
              <p>   
              <label for="url">Etat de la commande</label>
              <input type="text" id="etat" name="etat" class="form-control">
              <?php echo '<input id="username" name="username" type="hidden" value="' .$_SESSION['auth']->id. '">';?>
              </p>
              <div class="center-btn" style="position:relevant; height:5vh;">
          </ul>
      </div>
      <div class="center-btn" style="position:relevant; height:5vh;">
          <input class="btn btn-primary" type="submit" value="Envoyer">
          </form>
          


<?php require 'inc/footer.php'; ?>