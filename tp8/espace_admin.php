<?php
	session_start();
	echo("bonjour".$_SESSION['user']);
	echo("<a href='logout.php' >deconnexion</a>");
?>