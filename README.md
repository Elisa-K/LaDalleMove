# La Dalle Move

Dans le cadre de la deuxième édition angevine du Hyblab qui s'est tenu le 7, 8 et 9 novembre 2018, nous devions imaginer une expérience innovante à travers une web-app pour les sportifs et visitieurs de l'évènement Tout Angers Bouge.

**La Dalle Angevine**, porteur du projet, est une association qui a pour objectif de valoriser et de fédérer les acteurs du sport à Angers.

**Tout Angers bouge**, situé en plein centre-ville d'Angers, est une manifestation sportive où est réuni plus de cents clubs et associations pour animer via des stands, initiations et démontrations.


Ce projet a été réalisé par 2 étudiants de l'école **EEGP** pour le design, 2 étudiants de l'**UCO** pour la rédaction du contenu, et de 3 étudiants de l'**IMIE** pour le développement de l'application. Et accompagné de Charles Dubré, porteur du projet, qui est responsable éditorial du site de **La Dalle Angevine**

* [HybLab](https://www.hyblab.fr/)
* [Tout Angers Bouge](http://www.angers-trails.fr/)
* [La Dalle Angevine](https://ladalleangevine.com/)

### La problématique
Comment permettre aux participants de “Tout Angers bouge” de vivre cette journée différemment et de découvrir de nouveaux sports ?

### La piste retenue
Proposer un parcours interactif pour découvrir 15 sports méconnus avec un système de points et découvrir son profil de “dalleu”, en fonction du nombre de sports testés.

### Objectifs
Découvrir de nouvelles disciplines et se tester sur des sports.

## Pré-requis

```
Version minimum PHP : 7.1
```

## Installation

Récupération du projet :

```
git clone https://github.com/Eliiisa/LaDalleMove.git
```

### Création de la base de données **laDalleMove**

Importez le fichier situé dans le dossier **bdd** - ladallemove.sql dans votre base de données *laDalleMove*.

### Configuration de la base de données au projet

Dans le dossier **models**, vous trouverez le fichier *BddConnect.php* (fichier de configuration de la base de données).

Renseignez les informations nécessaires dans ce fichier pour connecter la base de données *laDalleMove* avec le projet :

```
	private $host = "localhost"; //serveur
	private $dbname = "ladallemove"; //nom de la base de données
	private $username = "root"; //identifiant
	private $password = 'root'; //mot de passe

```

