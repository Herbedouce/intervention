<?php
//Identifiants de la BDD
$host = "localhost";
$user = "intervention";
$pass = "intervention";
$bdd = "interventions";

//Connexion à la BDD
mysqli_connect($host,$user,$pass,$bdd) or die ("Connexion au serveur de BDD impossible");


//Requête permettant de créer une table de recherche
/*$query = "CREATE TABLE recherche (
		lien varchar(128) NOT NULL,
		keyword text,
		prenom varchar(30),
		id INT(11)
		PRIMARY KEY (id)
)";

//Envoi de la requête à la base
//mysql_query($query) or die ("Erreur de création de la table Recherche");*/

//Fermeture de la connexion
mysqli_close();

