<?php

//Variables serveur
$host="localhost";
$user="intervention";
$pass="intervention";
$bdd="interventions";

//Récupération de la valeure rechercher
if(!empty($_POST['prenom'])){
	$prenom = $_POST['prenom'];
}

//Connexion à la BDD et récupération des données
if(!empty($prenom)){
	//Initialisation à la BDD
	$mysqli = new mysqli($host,$user,$pass,$bdd);
	if ($mysqli->connect_errno){
		echo "Echec lors de la connexion à MySql";
	}	

	//Récupération de la valeur rechercher
	#$prenom = $_POST['prenom'];
	#var_dump(htmlspecialchars($prenom,ENT_QUOTES));
	
	//Création de la requête SQL
	$requete = "SELECT nom,prenom,date,observation".
		" FROM Intervenants,Interventions ".
		" WHERE ".
		" Intervenants.id_int=Interventions.id_int ".
        	" AND Intervenants.prenom='".$prenom."'";

	//Envoi de la requête à la BDD
	$res = $mysqli->query($requete);

	//Récupération des données dans un tableau data
	$data = $res->fetch_array(MYSQLI_BOTH);

	//Affichage sur le site
	#echo "L'intervenant ".$data['nom']." ".$data['prenom'].
	#" a effectué une intervention le ".$data['date'].
	#" Observations : ".$data['observation']; 

	echo "<table>".
		"<thead>".
			"<tr><th>Intervenant</th><th>Dates d'interventions</th><th>Motifs</th></tr>".
			"<tr><th>".$data['nom']." ".$data['prenom']."</th><th>".$data['date']."</th>".
			"<th>".$data['observation']."</th></tr>".
		"</thead>".
	     " </table>";

	//Libération des résultats
	$res->free();

	//Fermeture de la connexion à la BDD
	$mysqli->close();
}else {
	echo "Entrer un prénom";
}
?>
