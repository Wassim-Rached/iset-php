<h1>Entier pair obtenu par tirage aléatoire</h1>
    <?php
    $nombre = 0;

    while ($nombre % 2 != 0) {
        $nombre = rand();
    }

    echo "Le premier entier pair obtenu par tirage aléatoire est : $nombre";
    ?>