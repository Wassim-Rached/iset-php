<?php
	$adresse = $_POST['adresse'];

	if(isset($adresse)){
		echo "adresse : $adresse <br>";
		echo "navigateur : $_SERVER[HTTP_USER_AGENT]";
	}
?>

<form method="POST">
	<label for="adresse">adresse : </label>
	<input type="email" name="adresse" required`
	
	 />
	<button type='submit' >submit</button>
</form>