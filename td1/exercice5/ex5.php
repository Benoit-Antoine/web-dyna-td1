<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
<<<<<<< HEAD
		<title>Exercice 5</title>
=======
		<title>Exercie 5</title>
>>>>>>> dd7da63fb209e24bfa1900e0c38b4f7687dad786
	</head>
	<body>
	<?php
	include("fontions.php");
	?>
	
	<h1> Créer un tableau :</h1>
	
	<form method="POST" >
		<label for="l">Lignes : </label>
		<input type="number" value="" name="l">
		<label for="c">Colonnes : </label>
		<input type="number" value="" name="c">
		<input type="submit" value="Création du tableau">
	</form>
	<br>
	  
	<?php
		$nbLignes=$_POST["l"]??10;
		$nbColonnes=$_POST["c"]??10;
		createHtmlTables($nbLignes,$nbColonnes);
	?>
	
	
	
	</body>
</html>
