<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ex2</title>
	<style>
		table,td,tr,th{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			padding: 10px;
		}
	</style>
	<?php
		$tabClubs=array(
			"TI"=>array(
				"Google club"=>2019,
				"SecurityNets"=>2020
			),
			"AA"=>array(
				"Tunivisions"=>2021,
				"Enactus"=>2020,
			)
		);

		krsort($tabClubs);
	?>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th rowspan="2">department</th>
				<th colspan="2">Clubs</th>
			</tr>
			<th>Nom</th>
			<th>anne creation</th>
			<tr>
			</tr>
		</thead>
		<tbody>
		<?php
                foreach ($tabClubs as $department => $clubs) {
                    // we need to open the <tr> outside of the
					// loop because we have to specify the rowspan
					// at the first <tr>
					echo "<tr>";
                    echo "<td rowspan=" . count($clubs) . ">$department</td>";

                    $first = true;
                    foreach ($clubs as $club => $creationYear) {
                        if (!$first) {
							// this will start applying from the second loop
                            echo '<tr>';
                        }
                        
						echo "<td>$club</td>";
                        echo "<td>$creationYear</td>";
                        echo "</tr>";

                        $first = false;
                    }
                }
            ?>
		</tbody>
	</table>
</body>
</html>