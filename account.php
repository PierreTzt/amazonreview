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

$utilisateur = $_SESSION['auth']->id;

require 'inc/header.php';
?>

    <h1>Bonjour <?= $_SESSION['auth']->username; ?></h1>

    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>
        </div>
        <button class="btn btn-primary">Changer mon mot de passe</button>
    </form>

<h1>Commande en cour</h1>
  <div class="tbl-header">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>URL</th>
          <th>Date achat</th>
          <th>Date avis</th>
          <th>Etat</th>
          <th>Modif</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
		$mysqli = new mysqli("localhost", "root", "", "amazonreview");
		$mysqli -> set_charset("utf8");
		$requete = "SELECT * FROM produits WHERE username=$utilisateur";
		$resultat = $mysqli -> query($requete);
		while ($ligne = $resultat -> fetch_assoc()) {

      echo '<td>'. $ligne['id'] .'</td><td>'. $ligne['nom'] .'</td><td>'. $ligne['prix'] .'</td><td><a href='. $ligne['url'] .'&tag=infoelections-21><img scr="img/logo.png" width="30" height="30"></a></td><td>'. $ligne['date_achat'] .'</td><td>'. $ligne['date_review'] .'</td><td>'. $ligne['etat'] .'</td><td><a href="view.php?id='.$ligne['id'].'">Afficher cette commande</a></td></tr>';
        }
		$mysqli->close();
		?>

      </tbody>
    </table>
  </div>
</section>



<?php require 'inc/footer.php'; ?>