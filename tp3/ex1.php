<?php 
	echo "<br/>table sans indice <br/>";	
	$tabpays1 = array('Tunisie', 'Algerie', 'Libia', 'Sudan');
	
	for ($x = 0; $x < count($tabpays1); $x++) {
		echo "$tabpays1[$x] ";
	}

	echo "<br/>";
	
	sort($tabpays1);
	for ($x = 0; $x < count($tabpays1); $x++) {
		echo "$tabpays1[$x] ";
	}

	echo "<br/>";
	
	rsort($tabpays1);
	for ($x = 0; $x < count($tabpays1); $x++) {
		echo "$tabpays1[$x] ";
	}
	
	echo "<br/>";

	echo "<br/>table avec indice<br/>";	

	$abpays2=array('Tunis'=>'Tunisie','Alger'=> 'Algerie','Tripoli'=> 'Libia', 'Khartoum'=>'Sudan');

	for ($x = 0; $x < count($tabpays1); $x++) {
		echo "$tabpays1[$x] ";
	}

	echo "<br/>";
	
	sort($tabpays1);
	for ($x = 0; $x < count($tabpays1); $x++) {
		echo "$tabpays1[$x] ";
	}

	echo "<br/>";

	rsort($tabpays1);
	for ($x = 0; $x < count($tabpays1); $x++) {
		echo "$tabpays1[$x] ";
	}
	

	echo "<h1>table 1 </h1>";

	echo "
		<table>
		<thead>
			<th>
				index
			</th>
			<th>
				valeur
			</th>
		</thead>
		<tbody>
	";

	foreach($tabpays1 as $index => $valeur){
		echo "<tr>";
			echo "<td>$index</td>";
			echo "<td>$valeur</td>";
		echo "</tr>";
	}
	

	echo "
		</tbody>
		</table>
	";


	echo "<h1>table 2 </h1>";
	echo "
		<table>
		<thead>
			<th>
				index
			</th>
			<th>
				valeur
			</th>
		</thead>
		<tbody>
	";

	foreach($tabpays1 as $index => $valeur){
		echo "<tr>";
			echo "<td>$index</td>";
			echo "<td>$valeur</td>";
		echo "</tr>";
	}
	

	echo "
		</tbody>
		</table>
	";

?>