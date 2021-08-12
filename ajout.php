<!DOCTYPE html>
<html>

    <head>
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
                    <label for="date_commande">Nom du produit : <span class="req">*</span></label>
                    <input type="text" id="nom" name="nom" class="input-field" required="true">
                    </p>
                    <p class="pull-right">   
                    <label for="date_commande">Prix : <span class="req">*</span></label>
                    <input type="text" id="prix" name="prix" class="input-field" required="true">
                    </p>
                    </li>
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
                    <li>Avis posté 
                    <input type="radio" id="oui" name="review_poste" value="oui" checked="checked" class="input-field" required="true"><label for="oui">Oui</label>
                    <input type="radio" id="non" name="review_poste" value="non" class="input-field" required="true"><label for="nonoui">Non</label>
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

</body>
</html>