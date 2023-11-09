<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste Livres</title>
	<link rel="stylesheet" href="style.css">
	<?php
		include('connection.php');

		$sql = "SELECT * FROM Editeurs";
		$req = $cnx->query($sql);

	?>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Code</th>
				<th>nom</th>
				<th>addresse</th>
				<th>tel</th>
				<!-- <th>Code Editeur</th> -->
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = $req->fetch()) {
					echo "<tr>";
					echo "<td>".$row['Code_e']."</td>";
					echo "<td>".$row['nom']."</td>";
					echo "<td>".$row['addresse']."</td>";
					echo "<td>".$row['tel']."</td>";
					// echo "<td>".$row['Code_e']."</td>";
					echo "</tr>";
				}		
			?>
		</tbody>
	</table>

	<?php $conn->close() ?>	
	<script src="../index.js"></script>
</body>
</html>
