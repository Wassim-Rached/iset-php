<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>
<h1>Résultat de la mention</h1>
    <?php
    $moyenne = $_POST['moyenne'];

    if (is_numeric($moyenne)) {
        $moyenne = floatval($moyenne);

        if ($moyenne < 10) {
            echo "<p>Échec</p>";
        } elseif ($moyenne >= 10 && $moyenne < 12) {
            echo "<p>Mention passable</p>";
        } elseif ($moyenne >= 12 && $moyenne < 14) {
            echo "<p>Mention assez bien</p>";
        } elseif ($moyenne >= 14 && $moyenne < 16) {
            echo "<p>Mention bien</p>";
        } else {
            echo "<p>Mention très bien</p>";
        }
    } else {
        echo "<p>La moyenne saisie n'est pas valide.</p>";
    }
    ?>
    <a href="javascript:history.back()">Retour au formulaire</a>
</body>
</html>
