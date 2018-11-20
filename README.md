# #La Dalle Move

Dans le cadre de la deuxième édition angevine du Hyblab qui s'est tenu le 7, 8 et 9 novembre 2018, nous devions imaginer une expérience innovante à travers une web-app pour les sportifs et visitieurs de l'évènement Tout Angers Bouge.

**#La Dalle Angevine**, porteur du projet, est une association qui a pour objectif de valoriser et de fédérer les acteurs du sport à Angers.

**Tout Angers bouge**, située en plein centre-ville d'Angers, est une manifestation sportive où est réuni plus de cent clubs et associations.


Ce projet a été réalisé par 2 étudiants de l'école **EEGP** pour le design, 2 étudiants de l'**UCO** pour la rédaction du contenu, et de 3 étudiants de l'**IMIE** pour le développement de l'application. Le porteur de projet Charles Dubré, responsable éditorial du site **#LaDalleAngevine**, a accompagné les étudiants tout au long du HybLab.

* [HybLab](https://www.hyblab.fr/)
* [Tout Angers Bouge](http://www.angers-trails.fr/)
* [#La Dalle Angevine](https://ladalleangevine.com/)

### La problématique
Proposer au public de nouvelles expériences numériques autour de **Tout Angers Bouge** avec l'association **#LaDalleAngevine**, qui souhaite être plus active et encourager le public à tester et découvrir des sports sur l'événement.

### La piste retenue
Proposer un parcours interactif où les utilisateurs pourront tester 15 sports qu'ils n'ont pas l'habitude de pratiquer, défier leurs amis et gagner des récompenses. A l'issu du parcours ils découvriront quel type de **Dalleux** sommeille en eux.

### Objectifs
Défier ses amis, tester et découvrir de nouvelles disciplines !

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
	private $port = "3306"; // port
	private $username = "root"; //identifiant
	private $password = 'root'; //mot de passe

```

