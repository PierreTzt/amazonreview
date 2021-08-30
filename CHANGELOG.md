# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.1.1-alpha] - 2021-08-30
### Changed
- Changement de condition dans la base de donnée en varchar

## [1.2.1-alpha] - 2021-08-29
### Changed
- Ajout du total des commandes dans le dashboard

## [1.1.1-alpha] - 2021-08-28
### Added
- Ajout du numéro de version dans le footer

### Changed
- Correction de certaines fautes
- Changement de certain libélé
- Suppression du SVG pour le remplacé par une Font Awesome
- Finalisation complete de la partie information des commandes dans le dashboard

### Deprecated
- Suppresion du bouton pour supprimer les commandes

### Removed
- Suppression de l'image avant le nom du produit dans le dashboard
- Suppression du svg dans assets/media/icons/duotone/Communication/add_user.svg
- Suppression du svg dans assets/media/icons/duotone/Communication/write.svg
- Suppression du svg dans assets/media/icons/duotone/Shopping/Cart4.svg
- Suppression du svg dans assets/media/icons/duotone/General/Trash.svg

## [0.1.1-alpha] - 2021-08-27
### Added
- Ajout du lien dans le dashboard vers la fiche de la commandes avec toutes les infos lié

### Changed
- Changement complet de la page view
- Changement de la numérotation de version pour coller a une gestion sémantique de version

### Removed
- form_merci.html


## [2.2] - 2021-08-26
### Changed
- Changement du formulaire de modification de commande
- Mise en place du lien de modification dans la page des commandes
- Tri des commandes par date decroissante

## [2.1] - 2021-08-25
### Added
- Ajout dans la base de donnée le champ seller_name et seller_url

### Changed
- Ajout dans le formulaire d'ajout de commande la possibilité de mettre le nom du vendeur ainsi qu'un lien vers son profil
- Changement dans le dashboard a la place du type de remboursement le nom du vendeur avec le lien direct
- Changement dans la liste des commandes a la place du type de remboursement le nom du vendeur avec le lien direct
- Modification du lien pour l'ajout de commande sur la page commandes
- Changement du formulaire de modification de commande

### Removed
- Suppression du dossier avatar dans assets/media
- Suppression du dossier book dans assets/media
- Suppression du dossier demo dans assets/media
- Suppression du dossier illustrations dans assets/media
- Suppression du fichier portfolio.png, preview-1.jpg, preview-2.jpg, preview-3.jpg,qr.png, qr_-_code.png dans assets/media/misc
- Suppression du dossier product-demos dans assets/media
- Suppression du dossier products dans assets/media
- Suppression du dossier stock dans assets/media
- Suppression du dossier technology-logos dans assets/media

## [2.0] - 2021-08-23
### Changed
- Changement du formulaire de modification de produit
- Ajout du lien de modification dans le dashboard
- Ajout de plus de detail sur la page des commandes

## [1.9] - 2021-08-22
### Changed
- Finalisation de l'enregistrement des commandes dans le formulaire
- Passage de expectancy, resale, refund_type dans la base de donnée en NULL
- Passage des checkbox pour le type de remboursement en radio
- Ajout automatique de l'avis dans l'attente du vendeur
- Modification du dashboard pour affiché le type de remboursement, l'etat de la commande et la date prévu de l'ajout de la review

## [1.8] - 2021-08-21
### Changed
- Modification du lien du produit dans l'affichage du dashboard
- Modification du lien du produit dans l'affichage des commandes
- Changement du formulaire d'ajout de produit
- Changement de "remboursement_compet" dans la bdd en "refund_type" dans la table products
- Changement de "etat" dans la bdd en "condition" dans la table products
- Changement de "revente" dans la bdd en "resale" dans la table products
- Changement de "demande" dans la bdd en "expectancy" dans la table products
- Passage du resale en varchar au lieu de int
- Passage du refund_type en varchar au lieu de int
- Changement dans dashboard et orders la commandes sql pour l'affichage correct
- Changement du nom du fichier edit en edit_order

### Removed
- Suppression d'envoi d'un etat de commande au moment de la création de la commande

## [1.7] - 2021-08-20
### Changed
- Ajout du lien pour ajouter des commandes sur le dashboard
- Mise en forme du formulaire d'ajout de commandes
- Correction des problemes du formulaire
- Changement de la table "produits" en "products"
- Changement de "nom" dans la bdd en "name" dans la table products
- Changement de "date_achat" dans la bdd en "purchase_date" dans la table products
- Changement de "date_review" dans la bdd en "review_date" dans la table products
- Changement de "prix" dans la bdd en "price" dans la table products
- Changement dans dashboard et orders la commandes sql pour l'affichage correct
- Mise a jour des commentaires sur le fichier add_order.php
- Mise en place de la commande d'enregistrement des commandes dans add_confirm.php

## [1.6] - 2021-08-19
### Changed
- Epuration de la page dashboard
- Epuration de la page footer
- Epuration de la page header
- Ajout de € dans le tableau des commandes
- Mise en place correct du footer
- Modification du message d'erreur en cas de problème de coockies de session
- Plus de fichier d'exemple pour le moment
- Suppression des espaces en trop dans db.php
- Changement du message d'erreur dans app.php
- Ajustement du menu si non logé
- Changement du nom du fichier commandes.php en orders.php
- Mise en page de la page orders
- Possibilité de changer son mot de passe sur la page account et ne plus voir les commandes
- Changement du nom du fichier add.php en add_order.php
- Modification du formulaire au niveau design

### Removed
- .gitignore dans le dossier des class
- .gitignore dans le dossier inc
- Suppression du dossier dossier css
- Suppression du java fullcalendar
- Suppression du java upgrade plan
- Suppression du java create app
- Suppression du java chat
- headerold.php

## [1.5] - 2021-08-18
### Added
- Nouveau header.php
- Nouvel accueil : dashboard.php
- Dossiers Asset avec css et js pour le nouveau header

### Changed
- Changement du logo logo-4.png dans le dossier Asset/media/logo
- Mise a jour des balise <head> dans le header
- Affichage du menu une fois logé
- Mise en place de commentaire sur le code
- Sur la page de login, la redirection se fait sur le dashboard et non plus sur la page account
- Mise a jour du header pour mieux prendre en compte le css
- Affichage des 5 dernieres commande avec le nom du produit, le prix, le type de remboursement, le lien du produit, l'etat de la commande et les boutons pour permettre de géré la commande 

### Deprecated
- header.php vers headerold.php

### Removed
- Suppresion de logo-1-dark.svg dans le dossier Asset/media/logo
- Suppresion de logo-1.svg dans le dossier Asset/media/logo
- Suppresion de logo-2-dark.svg dans le dossier Asset/media/logo
- Suppresion de logo-2.svg dans le dossier Asset/media/logo
- Suppresion de logo-3.svg dans le dossier Asset/media/logo
- Suppresion de logo-5.p,g dans le dossier Asset/media/logo
- Suppresion de logo-6.svg dans le dossier Asset/media/logo
- Suppresion de logo-landing-dark.svg dans le dossier Asset/media/logo
- Suppresion de logo-landing.svg dans le dossier Asset/media/logo


## [1.4] - 2021-08-17
### Changed
- Tri des 5 dernieres commandes par ordre du plus recent au plus ancien sur la page account.php
- Tri des commandes par ordres du plus recent au plus ancien sur la page commandes.php
- Modification de la connexion a la base de donnée sur la page commandes.php