<h1>saisir de chaine de caractere</h1>
    <form method="POST" action="ex6.php">
        <label for="chaine_de_caractere">chaine de caractere :</label>
        <input type="text" name="chaine_de_caractere" id="chaine_de_caractere">

		<input type="submit" value="Submit">
    </form>

<?php
$chaine = $_POST['chaine_de_caractere'];

$mots = explode(' ', $chaine);

$initiales = '';

foreach ($mots as $mot) {
	if (!empty($mot)) { 
		$initiales .= strtoupper($mot[0]);
	}
}

echo "Affichage : $initiales";
?>