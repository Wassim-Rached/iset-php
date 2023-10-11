<?php

	$TMOTS=array(
		'wassim'=>'password123',
		'asser'=>'qwerty123',
		'wajih'=>'123456789',
		'dhia'=>'random123',
	);

?>

<h1>Sélectionnez une personne</h1>
<form method="POST" action="ex3.php">
	<label for="personne">Personne :</label>
	<select name="personne" id="personne">
			<?php
				foreach(array_keys($TMOTS) as $nom){
					echo "<option value='$nom'>$nom</option>";
				}
				?>
        </select>
        <br>
        <input type="submit" name="submit" value="Afficher le mot de passe">
    </form>

<h1>Sélectionnez mot de passe</h1>
<form method="POST" action="ex3.php">
		<label for="password">password :</label>
		<input type="text" name="password" id="password">
		<input type="submit" name="submit" value="Afficher le nom">
</form>


<?php
// echo $_POST["submit"]; 

if($_POST["submit"] == 'Afficher le mot de passe'){
	$personne = $_POST['personne'];
	
	echo "<p>mot de passe : $TMOTS[$personne]</p>";
}else if ($_POST["submit"] == 'Afficher le nom'){
	$password = $_POST['password'];
	$nom = array_search ($password, $TMOTS);

	echo "<p>nom de personne : $nom</p>";
}
?>