<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
	Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<?php
$francToEuroModifier = 0.1524;

$value = 100;
$newValue = $value * $francToEuroModifier;

echo "<h2>Montant en francs: $value</h2><br>";
echo "$value francs = $newValue €";
?>