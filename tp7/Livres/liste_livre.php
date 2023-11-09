<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste Livres</title>
	<link rel="stylesheet" href="style.css">
	<?php
		include('connection.php');

		$sql = "SELECT * FROM Livres";
		$req = $cnx->query($sql);
	?>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Code</th>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Prix</th>
				<th>Code Editeur</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $req->fetch()) {
					echo "<tr>";
					echo "<td>".$row['Code_i']."</td>";
					echo "<td>".$row['titre']."</td>";
					echo "<td>".$row['auteur']."</td>";
					echo "<td>".$row['prix']."</td>";
					echo "<td>".$row['Code_e']."</td>";
					echo "</tr>";
				}		
			?>
		</tbody>
	</table>

	<?php $conn->close() ?>	
</body>
</html>
