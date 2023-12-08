<?php

include('connexion.php');

$sql = "SELECT * FROM Apprenant 
		INNER JOIN Formation USING(idformation)
		WHERE idformation = 1";
$result = $cnx->query($sql);
$apprenants = $result->fetchAll();


echo $apprenants[0]['Adresse'];
?>

<style>
	table {
		border-collapse: collapse;
	}

	table,
	th,
	td,
	tr {
		border: 1px solid black;
	}

	td {
		padding: 10px;
	}
</style>

<table>
	<thead>
		<th>Ncin</th>
		<th>Nomapp</th>
		<th>Prenom</th>
		<th>Adresse</th>
		<th>Email</th>
		<th>Formation</th>
	</thead>
	<tbody>
		<?php foreach ($apprenants as $apprenant) { ?>
			<tr>
				<td><?php echo $apprenant['Ncin']; ?></td>
				<td><?php echo $apprenant['nomapp']; ?></td>
				<td><?php echo $apprenant['prenom']; ?></td>
				<td><?php echo $apprenant['adresse']; ?></td>
				<td><?php echo $apprenant['email']; ?></td>
				<td><?php echo $apprenant['libelle']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>