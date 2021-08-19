# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
- Possibilité de changer son mot de passe sur la page account et ne plus voir les commandes

## [1.6] - 2021-08-19
### Changed
- Epuration de la page dashboard
- Ajout de € dans le tableau des commandes
- Mise en place correct du footer
- Modification du message d'erreur en cas de problème de coockies de session
- Plus de fichier d'exemple pour le moment

### Deprecated
- headerold.php

### Removed
- .gitignore dans le dossiers des class

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