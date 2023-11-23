<html>

<head>
</head>

<body>
	<h2><br>liste des produits</h2>
	<?php
	include("classes.php");
	$res1 = produit::lister();
	if ($res1 != null && count($res1) > 0) {
		echo "<table border=\"1\" align=\"center\">";
		echo "<tr><th>designation</th><th>quantite</th><th>prix
unitaire</th><thcolspan='2'>Actions</th></tr>";
		foreach ($res1 as $enr1) {
			echo "<tr><td>" . $enr1['designation_prod'] . "</td><td>" .
				$enr1['quantite_stock'] . "</td><td>" . $enr1['prix_unitaire'] .
				"</td><td><a href=modifier_produit.php?code_produit=" .
				$enr1['idprod'] . ">Modifier</a></td>
<td><a href=supprimer_produit.php?code_produit=" .
				$enr1['idprod'] . ">Supprimer</a></td></tr>";
		}
		echo "</table>";
	} else
		echo "Aucunenregistrement";
	?>
</body>

</html>