<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>

<?php

function showTable($nbr)
{
	echo "Table de $nbr:<br>";

	for ($i = 1; $i <= 10; $i++) {
		echo "$i x $nbr = " . $i * $nbr . "<br>";
	};
};

showTable(8);


?>