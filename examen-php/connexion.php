<?php

try {
	$cnx = new PDO('mysql:host=localhost:6033;dbname=Study', 'root', 'my_secret_password');
	echo "connextion reussie";
} catch (PDOException $e) {
	echo "Erreur : " . $e->getMessage() . "<br/>";
	die();
}
