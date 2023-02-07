<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. (espaces pris en compte)</p>

<?php
$text = strtolower(str_replace(" ", "", "Engage le jeu que je le gagne"));
$reversedText = strrev($text);
$resultBool;

echo "*TEST*<br>";
echo $text;
echo "<br>";
echo $reversedText;

echo "<br><br>";
if ($text == $reversedText) {
	$resultBool = true;
	echo "<h2>La phrase « Engage le jeu que je le gagne » est un palindrome</h2>";
} else {
	$resultBool = false;
	echo "<h2>La phrase « Engage le jeu que je le gagne » n'est pas un palindrome</h2>";
}
?>