<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajout Editeur</title>
	<?php
		if(isset($_POST['submit'])){
			$code_e = $_POST['code_e'];
			$nom = $_POST['nom'];
			$adresse = $_POST['adresse'];
			$tel = $_POST['tel'];

			$sql="INSERT INTO Editeurs VALUES ('$code_e' ,'$nom' , '$adresse', $tel)";

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
		<h1>Editeurs : </h1>
		<div>
			<label for="code_e">code_e : </label>
			<input type="text" name="code_e" id="code_e">
		</div>
		<div>
			<label for="nom">nom : </label>
			<input type="text" name="nom" id="nom">
		</div>
		<div>
			<label for="adresse">adresse : </label>
			<input type="text" name="adresse" id="adresse">
		</div>
		<div>
			<label for="tel">tel : </label>
			<input type="text" name="tel" id="tel">
		</div>
		<div>
			<button type="submit" name="submit">submit</button>
		</div>
	</form>
	<script src="../index.js"></script>
</body>
</html>
