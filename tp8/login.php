<?php
	include ("../connexion.php");

	if (isset($_POST['login']) && isset($_POST['mp'])){
		$login =$_POST['login'];
		$pwd =$_POST['mp'];
		$req="SELECT * FROM administrateur WHERE login='$login' and mot_de_passe='$pwd'";
		$res=$cnx->query($req);
		
		if($res && $res->rowCount()==1){
			Session_start( );
			$_SESSION['ok']="ok";
			$enreg=$res->fetch(PDO::FETCH_ASSOC);
			$_SESSION["user"]=$enreg["login"];
			$_SESSION["password"]=$enreg["mot_de_passe"];
			echo"<script > document.location.href=\"espace_admin.php\" </script>";
			}
			else
			{ echo "Echec d'authentification! Réesssayer";
			echo"<script > document.location.href=\"index.php\" </script>";
			}
		}
?>