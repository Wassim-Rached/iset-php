<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ex1</title>
	<style>
		td,tr,th,table{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td,th{
			padding: 10px;
		}
	</style>
	<?php
		$date = $_POST['date'];
		$nom = $_POST['nom'];
	
		$valid = strtotime($date);

	?>
</head>
<body>

	<form method="POST" action="ex1.php" id="form">
		<label for="date">date :</label>
		<input type="text" name="date" id="date" required>
		<label for="nom">nom :</label>
		<input type="text" name="nom" id="nom" required>
		<button type="submit" name="submit" value="Submit">Submit</button>
	</form>
				
	<?php
	if(isset($_POST["submit"])){	
		if($valid){
			echo "
				<table>
				<thead>
					<tr>
						<th>Nom</th>
						<th>Jours</th>
						<th>mois</th>
						<th>anne</th>
					</tr>
				</thead>
				<tbody>
					<tr>";
					echo "<td>" . $nom . "</td>";
					echo "<td>" . date('d', $valid) . "</td>";
					echo "<td>" . date('m', $valid) . "</td>";
					echo "<td>" . date('Y', $valid) . "</td>";
					echo "</tr>
				</tbody>
				</table>";
		}else{
			echo "$date est non valid";
		}

	}
	?>
</body>	
</html>
