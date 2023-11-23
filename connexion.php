<?php

	try {
		$cnx = new PDO('mysql:host=localhost:6033;dbname=iset','root','my_secret_password');
		echo "connected";
	} catch (Exception $e) {
		echo "error : ".$e->getMessage();
		echo "code : ".$e->getCode();
	}
	
?>