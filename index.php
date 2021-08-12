<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
    </head>
    <body>
    <div class="col-lg-9 order-1 order-lg-2">

<div class="tab-pane tab-pane-navigation active" id="formsStyleDefault">

    <h4 class="mb-3">Default</h4>
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col">
        
        <form class="contact-form" action="envoi.php" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="date_commande" class="form-label mb-1 text-2">>Date de commande : </label>
                <input type="date" id="date_achat" name="date_achat">
            </div>
            <div class="form-group col-lg-6">
                <label for="date_review" class="form-inline">>Date de review : </label>
                <input type="date" id="date_review" name="date_review">
            </div>
            <div class="form-group col-lg-6">
                <label for="review_poste" class="form-inline">>Avis posté</label>
                <input type="text" id="review_poste" name="review_poste">
            </div>
            <div class="sm:ml-20 sm:pl-5 mt-5" id="submit">
                <input class="btn btn-primary" type="submit" value="Envoyer">
            </div>
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