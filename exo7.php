<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>


<?php
$inputValue = 25;

if (($inputValue >= 6) && ($inputValue <= 7)) {
	$category = "Poussin";
} else if (($inputValue >= 8) && ($inputValue <= 9)) {
	$category = "Pupille";
} else if (($inputValue >= 10) && ($inputValue <= 11)) {
	$category = "Minime";
} else if (($inputValue >= 12) && ($inputValue < 18)) {
	$category = "Cadet";
} else if ($inputValue >= 18) {
	$category = "Majeur";
} else {
	$category = "Hors catégories";
}

echo "<h2>L'enfant qui a $inputValue ans appartient à la catégorie $category</h2><br>";

?>