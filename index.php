<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Formulaire HTML</h1>
        
        <form action="envoi.php" method="post">
            <div class="c100">
                <label for="date_commande">Date de commande : </label>
                <input type="date" id="date_achat" name="date_achat">
            </div>
            <div class="c100">
                <label for="date_review">Date de review : </label>
                <input type="date" id="date_review" name="date_review">
            </div>
            <div class="c100">
                <label for="review_poste">Avis posté</label>
                <input type="text" id="review_poste" name="review_poste">
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>


        <?php
		$mysqli = new mysqli("localhost", "root", "", "amazonreview");
		$mysqli -> set_charset("utf8");
		$requete = "SELECT * FROM achat";
		$resultat = $mysqli -> query($requete);
		while ($ligne = $resultat -> fetch_assoc()) {
			echo $ligne['date_achat'] . ' ' . $ligne['date_review'] . ' ' . $ligne['review_poste'] . '
			<br>';
		}
		$mysqli->close();
		?>
    </body>
</html>