<h1>Affichage de "bonjour" avec une boucle for</h1>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "Bonjour<br>";
    }
    ?>
	
<h1>Affichage de "bonjour" avec une boucle while</h1>
    <?php
    $i = 0;
    while ($i < 10) {
        echo "Bonjour<br>";
        $i++;
    }
    ?>

<h1>Affichage de "bonjour" avec une boucle do...while</h1>
    <?php
    $i = 0;
    do {
        echo "Bonjour<br>";
        $i++;
    } while ($i < 10);
    ?>