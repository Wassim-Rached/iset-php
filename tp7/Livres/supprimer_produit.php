<?php
include("classes.php");
$prod = Produit::lecture($_GET["code_produit"]);
if ($prod != null)
	$res = $prod->supprimer();
if ($res === true) {
	echo ('<script>alert("la suppression est correcte")</script>');
	echo ("<script>document.location.href=\"liste_produit.php\"</
script>");
} else {
	echo ('<script> alert($res)</script>');
}
