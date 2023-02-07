<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<?php
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$moy = (array_sum($notes) / count($notes));

echo "Les notes obtenues par l'élève sont : " . json_encode($notes) . ".<br>";
echo "Sa moyenne générale est donc de : " . round($moy, 2);

?>