<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajout Livre</title>
	<?php
	if(isset($_POST['submit'])){
			$code_i = $_POST['code_i'];
			$titre = $_POST['titre'];
			$auteur = $_POST['auteur'];
			$prix = $_POST['prix'];
			$code_e = $_POST['code_e'];

			$sql="INSERT INTO Livres VALUES ('$code_e' ,'$titre' , '$auteur', $prix,'$code_e')";

			include("connection.php");

			$nb = $cnx->exec($sql);
			if($nb != 0){
				echo "$nb a insere";
			}else{
				echo "couldnt insert";
			}
		}
	?>
</head>
<body>
	<form method="POST">
		<h1>Livres : </h1>
		<div>
			<label for="code_i">code_i : </label>
			<input type="text" name="code_i" id="code_i">
		</div>
		<div>
			<label for="titre">titre : </label>
			<input type="text" name="titre" id="titre">
		</div>
		<div>
			<label for="auteur">auteur : </label>
			<input type="text" name="auteur" id="auteur">
		</div>
		<div>
			<label for="prix">prix : </label>
			<input type="number" name="prix" id="prix">
		</div>
		<div>
			<label for="code_e">code_e : </label>
			<input type="text" name="code_e" id="code_e">
		</div>
		<div>
			<button type="submit" name="submit">submit</button>
		</div>
		
	</form>
	<script src="./index.js"></script>
	</body>
</html>
