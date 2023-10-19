<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ex2</title>
	<style>
		td,tr,th,table{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td,th{
			padding: 10px;
		}	</style>
	<?php
		$tabdisciplines=array(
			'"TI"'=>array('"DSI"','"RSI"','"SEM"'),
			'"AA"'=>array('"LTI"','"MA"'),
		);

		asort($tabdisciplines);
		
	?>
</head>
<body>

<table>
		<thead>
			<tr>
				<th>Departments</th>
				<th>Disciplines</th>
			</tr>
		</thead>
		<tbody>
		<?php
                foreach ($tabdisciplines as $department => $disciplines) {
					echo "<tr>";
                    echo "<td rowspan=" . count($disciplines) . ">$department</td>";
                    $first = true;
                    foreach ($disciplines as $discipline) {
                        if (!$first) {
                            echo '<tr>';
                        }
                        
						echo "<td>$discipline</td>";
                        echo "</tr>";

                        $first = false;
                    }
                }
            ?>
		</tbody>
	</table>


</body>
</html>
