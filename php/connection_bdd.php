<?php
//Connexion a la base de données

$connect = new PDO('mysql:host=localhost:dbname=interventions','root','',[
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);

?>
