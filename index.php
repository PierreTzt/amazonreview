    <!DOCTYPE html>
<html>

    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/index.css">
        <script type='text/javascript' src='js/index.js'></script>
    </head>

<body>
    <a href='ajout.php'> ajouter une commande</a>
    <br>

    <?php
		$mysqli = new mysqli("localhost", "root", "", "amazonreview");
		$mysqli -> set_charset("utf8");
		$requete = "SELECT * FROM produits";
		$resultat = $mysqli -> query($requete);
		while ($ligne = $resultat -> fetch_assoc()) {
			//echo $ligne['date_achat'] . ' ' . $ligne['date_review'] . ' ' . $ligne['review_poste'] . '
			//<br>';
		}
		$mysqli->close();
		?>

    <section>

  <h1>Commande en cour</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prix</th>
          <th>URL</th>
          <th>Date achat</th>
          <th>Date avis</th>
          <th>Etat</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
        <?php
		$mysqli = new mysqli("localhost", "root", "", "amazonreview");
		$mysqli -> set_charset("utf8");
		$requete = "SELECT * FROM produits";
		$resultat = $mysqli -> query($requete);
		while ($ligne = $resultat -> fetch_assoc()) {


        echo '<td>'. $ligne['nom'] .'</td><td>'. $ligne['prix'] .'</td><td><a href='. $ligne['url'] .'><img scr="img/logo.png" width="30" height="30"></a></td><td>'. $ligne['date_achat'] .'</td><td>'. $ligne['date_review'] .'</td><td>'. $ligne['etat'] .'</td></tr>';
        }
		$mysqli->close();
		?>

      </tbody>
    </table>
  </div>
</section>

</body>
</html>