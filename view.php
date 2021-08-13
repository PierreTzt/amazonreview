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
  
    $req = $db->prepare('SELECT nom, prix, date_achat, url FROM produits WHERE id = ?');
    $req->execute(array($_GET['id']));
		
    while ($infos = $req->fetch())
      {
      ?>

<div>
	<div>
		<h2>Commande du <?php echo $infos['nom'];?></h2>
	</div>
	
	<div>
        <div>
			<h4>Date de la commande</h4>
			<p><?php echo $infos['date_achat'];?></p>	
		</div>
        <div>
			<h4>Prix du produit</h4>
			<p><?php echo $infos['prix'];?></p>	
		</div>
        <div>
			<h4>Lien du produit</h4>
			<p><a href=<?php echo $infos['url'];?>><?php echo $infos['url'];?></a></p>	
		</div>
        <div>
			<h4>Date de la commande</h4>
			<p><?php echo $infos['date_achat'];?></p>	
		</div>
        <div>
			<h4>Date de la commande</h4>
			<p><?php echo $infos['date_achat'];?></p>	
		</div>
        <div>
			<h4>Date de la commande</h4>
			<p><?php echo $infos['date_achat'];?></p>	
		</div>
	</div>
</div>

	  
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
</form>
</p>


<?php require 'inc/footer.php'; ?>