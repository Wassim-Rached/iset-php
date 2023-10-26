<?php

	// Create connection
	try {
		$cnx = new PDO('mysql:host=localhost:6033;dbname=gugugaga','wassim','password');
	} catch (Exception $e) {
		echo "error : ".$e->getMessage();
		echo "code : ".$e->getCode();
	}
	
?>