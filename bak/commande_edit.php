<html>
  <head>
    <title>modification de commande</title>
  </head>
<body>


<?php
// Connexion à la base de données
try
{
    
    try{
      $db = new PDO('mysql:host=localhost;dbname=amazonreview', 'root', '');
   }catch(Exception $e){
      echo "Échec : " . $e->getMessage();
   }
  
    $req = $db->prepare('SELECT nom, prix, url FROM produits WHERE id = ?');
    $req->execute(array($_GET['id']));
		
    while ($infos = $req->fetch())
      {
      ?>

<p>	
<form action="commande.php" method="post" id="modif_article">


<label for="nom">nom</label><br/>

	<input type="text" name="nom" value="<?php echo $infos['nom'];?>" tabindex="20"/><br/>

<label for="prix">prix</label><br/>

	<input type="text" name="prix" title="<?php echo $infos['prix'];?>" tabindex="20"/><br/>

<label for="url">url</label><br/>
	
	<textarea type="text" name="url" rows="10" cols="140" tabindex="20" title="<?php echo $infos['url'];?>"></textarea><br/>

<br/>	
	  
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


</body>
</html>