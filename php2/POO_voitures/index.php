<!-- Exercice N°13 -->

<?php

require "Voiture.php";

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

$arrayVoitures = array($v1, $v2);

echo $v1->demarrer();
echo "<br>";
echo $v1->accelerer(50);
echo "<br>";
echo $v2->demarrer();
echo "<br>";
echo $v2->stopper();
echo "<br>";
echo $v2->accelerer(20);
echo "<br>";
$v1->printVitesseActuelle();
echo "<br>";
$v2->printVitesseActuelle();

// echo json_encode($arrayVoitures);
// var_dump($arrayVoitures);

// // Affichage des infos de toutes les voitures
// $i = 1;
// foreach($arrayVoitures as $voiture) {
//     // On récupère l'état (démarré/arrèté) de la voiture
//     if($voiture->getStatus() == true) {
//         $status = "démarrée";
//     }
//     else {
//         $status = "à l'arrêt";
//     };
    
//     $i += 1;
//     echo "Infos véhicule " . $i . "<br>";
//     echo "*****************************<br>";
//     echo "Nom et modèle du véhicule: " . $voiture->getMarque() . " " . $voiture->getModele() . "<br>";
//     echo "Nombre de portes: " . $voiture->getNbrPortes() . "<br>";
//     echo "Le véhicule " . $voiture->getMarque() . "est " . $status . "<br>";
//     echo "Sa vitesse actuelle est de: " . $voiture->getVitesseActuelle() . "<br>";
// }
