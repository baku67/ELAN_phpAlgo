<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<?php

// Attention pour les dates "/" affiche en mode américain alors que "." ou "-" affiche en européen
$date1 = new DateTime(date('d-m-Y'));
$date2 = new DateTime(date('d-m-Y', strtotime('17-01-1985')));
$interval = $date1->diff($date2);


echo "Date actuelle: " . $date1->format('d/m/Y') . "<br>";
echo "Date de naissance: " . $date2->format('d/m/Y') . "<br>";
echo $interval->format('<br>Age de la personne: %Y ans %m mois et %d jours');

?>