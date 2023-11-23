<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>Ajout Editeur</title>
	<?php
		if(isset($_POST['submit'])){
			$code_e = $_POST['code_e'];
			$nom = $_POST['nom'];
			$adresse = $_POST['adresse'];
			$tel = $_POST['tel'];

			$sql="INSERT INTO Editeurs VALUES ('$code_e' ,'$nom' , '$adresse', $tel)";

			include("../connection.php");
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
	<div class="container">
	<form method="POST" class="mt-5">
    <h1 class="mb-4">Ajout Editeurs:</h1>
    <div class="form-group">
      <label for="code_e">code_e:</label>
      <input required type="text" name="code_e" id="code_e" class="form-control">
    </div>
    <div class="form-group">
      <label for="nom">nom:</label>
      <input required type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
      <label for="adresse">adresse:</label>
      <input required type="text" name="adresse" id="adresse" class="form-control">
    </div>
    <div class="form-group">
      <label for="tel">tel:</label>
      <input required type="text" name="tel" id="tel" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" class="mt-3 btn btn-primary" name="submit">Submit</button>
    </div>
  </form>	</div>

	<script src="../index.js"></script>
</body>
</html>
