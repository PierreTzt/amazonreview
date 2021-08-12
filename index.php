<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="intro-y box mt-5">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
        
        <form action="envoi.php" method="post">
            <div class="form-inline">
                <label for="date_commande" class="form-inline">>Date de commande : </label>
                <input type="date" id="date_achat" name="date_achat">
            </div>
            <div class="form-inline">
                <label for="date_review" class="form-inline">>Date de review : </label>
                <input type="date" id="date_review" name="date_review">
            </div>
            <div class="form-inline">
                <label for="review_poste" class="form-inline">>Avis posté</label>
                <input type="text" id="review_poste" name="review_poste">
            </div>
            <div class="sm:ml-20 sm:pl-5 mt-5" id="submit">
                <input class="btn btn-primary" type="submit" value="Envoyer">
            </div>
        </form>
</div>
</div>


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