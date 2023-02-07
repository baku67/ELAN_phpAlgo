<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<?php

$tableau = ["Peugeot", "Renault", "Tesla", "BMW", "Mercedes"];

echo "Il y a " . count($tableau) . " marques de voitures dans le tableau:<br>";
foreach ($tableau as $marque) {
	echo $marque . "<br>";
}

?>