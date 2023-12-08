<?php
include('connexion.php');

$sql = "SELECT * FROM Formation";
$result = $cnx->query($sql);
$formations = $result->fetchAll();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Retrieve form data
	$ncin = $_POST['ncin'];
	$nomapp = $_POST['nomapp'];
	$addresse = $_POST['addresse'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$formation = $_POST['formation'];

	$sql = "INSERT INTO Apprenant(Ncin, nomapp, prenom, adresse, email, idformation)
	VALUES ($ncin, '$nomapp', '$prenom', '$adresse', '$email', $formation)";

	$nb = $cnx->exec($sql);

	if ($nb === 1) {
		echo "Apprenant ajouté avec succès";
	} else {
		echo "Erreur lors de l'ajout de l'apprenant";
	}
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
		<label for="ncin">Ncin</label>
		<input type="number" name="ncin" required>
	</div>
	<div>
		<label for="nomapp">Nomapp</label>
		<input type="text" name="nomapp" required>
	</div>
	<div>
		<label for="addresse">Addresse</label>
		<input type="text" name="addresse" required>
	</div>
	<div>
		<label for="prenom">Prenom</label>
		<input type="text" name="prenom" required>
	</div>
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" required>
	</div>
	<div>
		<label for="formation">Formation</label>
		<select name="formation">
			<?php foreach ($formations as $formation) { ?>
				<option value="<?php echo $formation['idformation']; ?>"><?php echo $formation['libelle']; ?></option>
			<?php } ?>
		</select>
	</div>
	<input type="submit" value="Envoyer">
</form>