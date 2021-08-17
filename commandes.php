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

<h1>Commande en cour</h1>
  <div class="tbl-header">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Etat</th>
          <th>Modifier</th>
          <th>Lien Amazon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
		$mysqli = new mysqli("localhost", "root", "", "amazonreview");
		$mysqli -> set_charset("utf8");
		$requete = "SELECT * FROM produits WHERE username=$utilisateur ORDER BY id DESC";
		$resultat = $mysqli -> query($requete);
		while ($ligne = $resultat -> fetch_assoc()) {

      echo '<td>'. $ligne['id'] .'</td><td>'. $ligne['nom'] .'</td><td>'. $ligne['prix'] .'</td><td>'. $ligne['etat'] .'</td><td><a href="view.php?id='.$ligne['id'].'"><i class="fas fa-edit"></i></a></td><td><a href='. $ligne['url'] .'&tag=infoelections-21><i class="fab fa-amazon" style="color:orange"></i></a></td></tr>';
        }
		$mysqli->close();
		?>

      </tbody>
    </table>
  </div>
</section>



<?php require 'inc/footer.php'; ?>