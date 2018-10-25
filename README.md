NaturaPass
==========

# Messages de commit

Un commit doit concerner un développement particulier et par conséquent compoter un message clair de ce qui a été fait. Cette méthodologie permet de retrouver de manière simple où à été modifié une partie du code, comment, pourquoi.

# Travailler en local

## Installer Git

Téléchargez et installez Git: http://git-scm.com/downloads
Choisir les options
* Command Line sans modification de PATH
* Windows Line Endings, commit linux line endings

## Installer Wamp

Téléchargez l'executable qui convient à votre machine: www.wampserver.com#download-wrapper

De base, tout est configuré.

## Installer Composer

Récupérer le composer.phar et suivez la procédure: https://getcomposer.org/doc/00-intro.md#manual-installation

## Finishing

Clic droit sur Ordinateur => Propriétés => Paramètres systèmes avancés => Variables d'environnement

Dans Variables d'environnement:
* Ajouter une variable COMPOSER_HOME, avec pour valeur "C:\bin"

Dans Variables Systèmes:
* Modifier la valeur de PATH, ajoutez: "C:\wamp\bin\php.version.de.php;C:\bin;"
