<?php
include("classes.php");
$prod = produit::lecture($_GET["code_produit"]);
?>
<h2>Modifier produit</h2>
<form name="form1" method="post">
	<table width="300" border="0" align="center">
		<tr>
			<td>code produit</td>
			<td><input name="code_produit" type="text" value=<?php
																echo $prod->idprod; ?>></td>
		</tr>
		<tr>
			<td>designation</td>
			<td><input name="designation_prod" type="text" value=<?php
																	echo $prod->designation_prod; ?>></td>
		</tr>
		<tr>
			<td>quantite stock </td>
			<td><input name="quantite_stock" type="text" value=<?php
																echo ($prod->quantite_stock); ?>></td>
		</tr>
		<tr>
			<td>prix unitaire</td>
			<td><input name="prix_unitaire" type="text" value=<?php echo $prod->prix_unitaire; ?>></td>
		</tr>
		<tr>
			<td>id famille</td>
			<td><input name="idfam" type="text" value=<?php echo
														$prod->idfam; ?>></td>
		</tr>
		<tr>
			<td><input type="submit" name="Modifier" value="Modifier"></td>
			<td><input type="reset" name="Submit2" value="annuler"></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['Modifier'])) {
	$pl = new produit(
		$_POST["code_produit"],
		$_POST["designation_prod"],
		$_POST["quantite_stock"],
		$_POST["prix_unitaire"],
		$_POST["idfam"]
	);
	$res = $pl->modifier();
	if ($res === true) {
		echo ('<script>alert("La modification est
correcte")</script>');
		echo ("<script>document.location.href=\"liste_produit.php\"
</script>");
	} else {
		echo ($res);
	}
}
?>