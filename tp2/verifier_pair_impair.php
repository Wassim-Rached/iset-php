<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat de la vérification</h1>
    <?php
    $nombre = $_POST['nombre'];

    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "<p>Le nombre $nombre est pair.</p>";
        } else {
            echo "<p>Le nombre $nombre est impair.</p>";
        }
    } else {
        echo "<p>Vous n'avez pas saisi un nombre valide.</p>";
    }
    ?>
    <a href="javascript:history.back()">Retour au formulaire</a>
</body>
</html>
