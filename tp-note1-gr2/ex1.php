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

		$day;
		$month;
		$year;
	
		function validateDate($some_date) {
			$date_parts = explode('-', $some_date);
		
			if (count($date_parts) !== 3) {
				return false;
			}
		
			$day = intval($date_parts[0]);
			$month = intval($date_parts[1]);
			$year = intval($date_parts[2]);
		
			if ($year < 1000 || $year > 9999 || $month < 1 || $month > 12 || $day < 1) {
				return false;
			}
		
			switch ($month) {
				case 1:
				case 3:
				case 5:
				case 7:
				case 8:
				case 10:
				case 12:
					$max_days = 31;
					break;
				case 4:
				case 6:
				case 9:
				case 11:
					$max_days = 30;
					break;
				case 2:
					if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
						$max_days = 29;
					} else {
						$max_days = 28;
					}
					break;
				default:
					return false;
			}
		
			if ($day > $max_days) {
				return false;
			}
			
			$date = sprintf("%02d-%02d-%04d", $day, $month, $year);
			
			return $date;
		}

		$valid = validateDate($date);

		$date_parts = explode('-', $valid);
		
		if($valid){
			global $day,$month,$year;

			$day = intval($date_parts[0]);
			$month = intval($date_parts[1]);
			$year = intval($date_parts[2]);

		}

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
					echo "<td>" . $day . "</td>";
					echo "<td>" . $month . "</td>";
					echo "<td>" . $year . "</td>";
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
