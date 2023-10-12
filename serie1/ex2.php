<!DOCTYPE html>
<html>
<head>
    <title>Tableau Multidimensionnel</title>
	<style>
		table,tr,td,th{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			padding: 4px;
		}
</style>
</head>
<body>
    <table border="1">
        <tr>
            <th>Pays</th>
            <th>Villes</th>
        </tr>
        <?php
        $tab1 = array(
            "France" => array("Paris", "Lyon", "Marseille", "Nantes", "Lille"),
            "Allemagne" => array("Berlin", "Hambourg", "Hanovre", "Munich", "Cologne"),
            "Espagne" => array("Madrid", "Bilbao", "Grenade", "Barcelone", "Séville")
        );

        foreach ($tab1 as $pays => $villes) {
            $rowspan = count($villes);
            echo "<tr>";
            echo "<td rowspan=\"$rowspan\">$pays</td>";
            echo "<td>$villes[0]</td>";
            echo "</tr>";
            for ($i = 1; $i < $rowspan; $i++) {
                echo "<tr>";
                echo "<td>$villes[$i]</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
