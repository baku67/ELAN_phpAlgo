<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<?php

$amount_due = 145; 
$amount_payed = 200;

if ($amount_payed > $amount_due) {
	$amount_change = $amount_payed - $amount_due;
	$nbrOf_10 = 0;
	$nbrOf_5 = 0;
	$nbrOf_2 = 0;
	$nbrOf_1 = 0;


	echo "Motant à payer : $amount_due €<br>";
	echo "Montant versé : $amount_payed €<br>";
	echo "Reste à payer : $amount_change €<br>";
	echo "***************************************************<br>";
	echo "Rendu de monnaie :<br>";



	while ($amount_change > 10) {
		$nbrOf_10 += 1;
		$amount_change -= 10;
	}

	while ($amount_change > 5) {
		$nbrOf_5 += 1;
		$amount_change -= 5;
	}

	while ($amount_change > 2) {
		$nbrOf_2 += 1;
		$amount_change -= 2;
	}

	while ($amount_change >= 1) {
		$nbrOf_1 += 1;
		$amount_change -= 1;
	}

	$string = "";
	if ($nbrOf_10 > 0) {
		if ($nbrOf_10 > 1) {
			$string .= "$nbrOf_10 billets de 10€ - ";
		} else {
			$string .= "$nbrOf_10 billet de 10€ - ";
		}
	}
	if ($nbrOf_5 > 0) {
		if ($nbrOf_5 > 1) {
			$string .= "$nbrOf_5 billets de 5€ - "; 
		} else {
			$string .= "$nbrOf_5 billet de 5€ - ";
		}
	}
	if ($nbrOf_2 > 0) {
		if ($nbrOf_10 > 1) {
			$string .= "$nbrOf_2 pièces de 2€ - ";
		} else {
			$string .= "$nbrOf_2 pièce de 2€ - ";
		}
	}
	if ($nbrOf_1 > 0) {
		if ($nbrOf_1 > 1) {
			$string .= "$nbrOf_1 pièces de 1€ - ";
		} else {
			$string .= "$nbrOf_1 pièce de 1€ - ";
		}
	}

	echo $string;
}



?>