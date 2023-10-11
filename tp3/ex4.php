<?php



?>

<h1>saisir de chaine de caractere</h1>
    <form method="POST" action="ex4.php">
        <label for="chaine_de_caractere">chaine de caractere :</label>
        <input type="text" name="chaine_de_caractere" id="chaine_de_caractere">
        
        <label for="position_de_départ">position de départ :</label>
		<input type="text" name="position_de_départ" id="position_de_départ">
		
        <label for="longeur_precise">longeur precise :</label>
        <input type="text" name="longeur_precise" id="longeur_precise">

		<input type="submit" value="Submit">
    </form>

<?php

	$chaine_de_caractere = $_POST['chaine_de_caractere'];
	$position_de_départ = $_POST['position_de_départ'];
	$longeur_precise = $_POST['longeur_precise'];

	$longeur=strlen($chaine_de_caractere);

	echo "<p>longeur: $longeur</p>";
	

	$sous_chaine=substr($chaine_de_caractere, $position_de_départ,$longeur_precise );
	echo "<p>sous chaine : $sous_chaine: </p>";

	$chaine_de_caractere_inverse=strrev($chaine_de_caractere);
	echo "<p>chaine de caractere inverse : $chaine_de_caractere_inverse </p>"
?>