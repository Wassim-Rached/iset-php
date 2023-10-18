<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ex1</title>
	<?php 
		$achats_arr = array(
			"Clavier"=>20,
			"Souris"=>35,
			"Ecran"=>200,
			"Casque"=>35,
		);

		$total=0;
		foreach ($achats_arr as $prix) {
			$total+=$prix;
		}

		function Nboccurence(){
			global $achats_arr;
			
			$prix_arr = array_values($achats_arr);
						
			$nb_arr=array_count_values($prix_arr);

			echo "<ul>";
			
			foreach ($nb_arr as $prix => $nb_occurence) {
				echo "<li>le prix $prix se repete $nb_occurence fois</li>";
			}

			echo "</ul>";
		}
		?>
</head>
<body>
	<?php
		echo "<p>Total : $total</p>";

		Nboccurence();
	?>
</body>
</html>
