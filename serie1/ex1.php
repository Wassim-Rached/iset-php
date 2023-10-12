<?php

	$tab=array(
		"php5@gmail.com",
		"machine@hotmail.fr",
		"webmestre@hotmail.fr",
		"html@yahoo.fr",
		"java@yahoo.fr","css@yahoo.fr");

	$domains = array(); 

	foreach($tab as $mail){
		$domain = explode('@',$mail)[1];

		if(!isset($domains[$domain])){
			$domains[$domain]=0;
		}
		
		$domains[$domain]++;
	}

	$sum=array_sum($domains);

	foreach($domains as $domain => $value){
		echo "Fournisseur d'accès : $domain = %" . ($value /$sum) * 100 . "<br/>";
	}

?>

