<form method="POST">
	<label for="adresse">adresse :</label>
	<input type="text" name="adresse" id="adresse"/>
	<input type="submit" name="submit" value="submit"/>
</form>

<?php


if(isset($_POST['submit'])){
	$expr="/^www\.[a-zA-Z]+[.-]?[a-zA-Z]*\.[a-zA-Z]{2,4}$/";
	echo preg_match($expr,$_POST['adresse']) ? "<p>valid</p>" : "<p>non valid</p>";
}
?>

