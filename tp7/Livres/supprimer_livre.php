<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>Supprimer Editeur</title>
	<?php
		if(isset($_POST['submit'])){
			$code_i = $_POST['code_i'];

			$sql = "DELETE FROM Livres WHERE Code_i = '$code_i'";
			$nb = $cnx->exec($sql);

			if($nb != 0){
				echo "$nb a été supprimé";
			}else{
				echo "Impossible de supprimer";
			}

		}
	?>
</head>
<body>
	<div class="container">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="mt-5">
    <div class="form-group">
      <label for="code_i">Livre :</label>
      <select required type="text" name="code_i" id="code_i" class="form-control">
		<?php
			include('../connection.php');

			$sql = "SELECT * FROM Livres";
	
			$req = $cnx->query($sql);

			while ($row = $req->fetch()) {
				echo "<option value='".$row['Code_i']."'>".$row['titre']."</option>";
			}

			$cnx = null
		?>
	  </select>
    </div>
    <div class="form-group">
      <button type="submit" class="mt-3 btn btn-danger" name="submit">Delete</button>
    </div>
  </form>	</div>

	<script src="../index.js"></script>
</body>
</html>
