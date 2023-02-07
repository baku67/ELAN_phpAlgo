<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<?php

$array = [
	"Mickaël" => "francais",
	"Virgile" => "espagnol",
	"Marie-Claire" => "anglais",
	"Lian Tao" => "chinois"
];

foreach ($array as $personne => $value) {

	// echo "Personne: " . $personne . ", valeur: " . $value . "<br><br><br>";
	switch ($value) {
		case "francais":
			echo "Bonjour $personne<br>";
			break;
		case "espagnol":
			echo "Hola $personne<br>";
			break;
		case "anglais":
			echo "Hello $personne<br>";
			break;
		case "chinois":
			echo "Ni hao $personne<br>";
			break;
	}
}


// Tri par ordre alphabétique:
echo "<br><br> Tableau trié par ordre alphabétique (nom): <br>";
ksort($array);
foreach ($array as $personne => $value) {
	switch ($value) {
		case "francais":
			echo "Bonjour $personne<br>";
			break;
		case "espagnol":
			echo "Hola $personne<br>";
			break;
		case "anglais":
			echo "Hello $personne<br>";
			break;
		case "chinois":
			echo "Ni hao $personne<br>";
			break;
	}
}


?>