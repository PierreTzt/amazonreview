    <!DOCTYPE html>
<html>

    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
        <script type='text/javascript' src='js/script.js'></script>
    </head>

<body>
    <div class="contact container shadow" id="contact_form">        
        <div class="contact row header">
            <h2>Suivi de commande</h2>
            <div id="contact_results"></div>
        </div>
    <form action="envoi.php" method="post">
        <div class="contact row body" id="contact_body">
            <div class="contact-elements">
                <ul>
                    <li>
                    <p class="left">   
                    <label for="date_commande">Date de commande : <span class="req">*</span></label>
                    <input type="date" id="date_achat" name="date_achat" class="input-field" required="true">
                    </p>
                    <p class="pull-right">
                    <label for="date_review">Date de review : <span class="req">*</span></label>
                    <input type="date" id="date_review" name="date_review" class="tel-number-field long" required="true">
                    </p>
                    </li>
                    <div class="center-btn" style="position:relevant; height:5vh;">
                    <li>
                    <label for="review_poste">Avis posté <span class="req">*</span></label>
                    <input type="text" id="review_poste" name="review_poste" class="input-field" required="true">
                    </li>
                </ul>
            </div>
            <div class="center-btn" style="position:relevant; height:5vh;">
                <li>
                <input class="btn btn-submit" type="submit" value="Envoyer">
                </li>
            </div>
        </div>
    </form>
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