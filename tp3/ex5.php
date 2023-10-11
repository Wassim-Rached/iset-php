<?php
$emploisDuTemps = array(
    'Lundi' => 'Cours de mathématiques de 9h à 11h, Réunion d\'équipe à 14h',
    'Mardi' => 'Cours de français de 10h à 12h, Entretien client à 15h',
    'Mercredi' => 'Cours de sciences de 8h à 10h, Sport à 16h',
    'Jeudi' => 'Cours d\'histoire de 9h à 11h, Réunion de projet à 13h',
    'Vendredi' => 'Cours d\'anglais de 10h à 12h, Préparation de présentation à 16h',
    'Samedi' => 'Journée libre',
    'Dimanche' => 'Journée libre'
);

$activites = '';

echo "<ul>";
foreach ($emploisDuTemps as $jour => $activite) {
    $activites .= "<li>$jour : $activite\n</li>";
}
echo "</ul>";

echo "<h3>Emploi du temps de la semaine :</h3>\n\n$activites";
?>
