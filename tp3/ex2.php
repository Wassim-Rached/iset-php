<?php

	$tabnotes1=array(13,15.45,11,9);
	$tabcoef=array(1,2.5,1.5,1);

	echo "<h3>contenu de tabnotes1</h3>";
	for($i=0;$i<count($tabnotes1);$i++){
		echo "$tabnotes1[$i] ,";
	}


	$moyenne=0;

	for($i=0;$i<count($tabnotes1);$i++){
		$moyenne+=$tabnotes1[$i]*$tabcoef[$i];
	}
	
	$moyenne=$moyenne/array_sum($tabcoef);

	echo "<p>moyenne est : $moyenne</p>";

	rsort($tabnotes1);

	echo "<h3>contenu de tabnotes1 trié par ordre  décroissant </h3>";
	foreach($tabnotes1 as $value){
		echo "$value ,";
	}

	$tabnotes2=array(
		'Math'=>$tabnotes1[0],
		'Englais'=>$tabnotes1[1],
		'Francais'=>$tabnotes1[2],
		'Algorithme'=>$tabnotes1[3],
	);

	echo "<p>le contenu du tableau tabnotes2 </p>";

	$i=0;
	$keys = array_keys($tabnotes2);
	$length = count($keys);

	echo"<ul>";
		while ($i < $length) {
			$matiere = $keys[$i];
			$score = $tabnotes2[$matiere];
			echo "<li>$matiere: $score</li>";
			$i++;
		}
	echo"</ul>";

?>