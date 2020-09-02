<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Recherche d'intervention</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
</head>
<body>
	<form method='post' action="php/recherche.php">
		<input type='text' placeholder='Rechercher' name="prenom"/>
		<input type='submit' value="Rechercher"/>
	</form>
	<?php include('php/recherche.php');?>
	<!--<table>
		<thead>
			<tr><th>Prenom</th><th>Dates d'interventions</th><th>Motifs interventions</th></tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</body>-->
</html>
