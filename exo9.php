<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
	Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>


<?php

$age = 32;
$sexe = "F";

echo "Age: $age<br>";
echo "Sexe : $sexe<br>";

if ($sexe = "F") {
	if (($age >= 18) && ($age <= 35)) {
		echo "La personne est imposable.<br>";
	} else {
		echo "La personne n'est pas imposable.<br>";
	}
} else if ($sexe = "M") {
	if ($age > 20) {
		echo "La personne est imposable.<br>";
	} else {
		echo "La personne n'est pas imposable.<br>";
	}
}

?>