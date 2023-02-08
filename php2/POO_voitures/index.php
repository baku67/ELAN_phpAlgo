<!-- Exercice N°13 -->

<?php

require "Voiture.php";

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);
$v3 = new Voiture("Fiat", "Multipla", 38);
$v4 = new VoitureElec("Tesla", "blabla", 4, 26000);

$arrayVoitures = array($v1, $v2, $v3, $v4);

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
echo $v4->ralentir(5);
echo "<br>";
$v1->printVitesseActuelle();
echo "<br>";
$v2->printVitesseActuelle();
echo "<br>";
echo $v3->demarrer();
echo "<br>";
echo $v3->accelerer(4000);
echo "<br>";
echo $v4->demarrer();
echo "<br>";
echo $v4->accelerer(5);
echo "<br>";
echo $v4->ralentir(5);
echo "<br>";
$v4->printVitesseActuelle();
echo "<br>";
echo $v4->printAutonomie();


echo "<br><br><br>";
var_dump($arrayVoitures);
echo "<br><br><br>";

// // Affichage des infos de toutes les voitures
$i = 1;
foreach($arrayVoitures as $voiture) {
    // On récupère l'état (démarré/arrèté) de la voiture
    if($voiture->getStatus() == true) {
        $status = "démarrée";
    }
    else {
        $status = "à l'arrêt";
    };
    
    echo "Infos véhicule " . $i . "<br>";
    echo "*****************************<br>";
    echo "Nom et modèle du véhicule: " . $voiture->getMarque() . " <span style='font-weight:bold;'>" . $voiture->getModele() . "</span><br>";
    echo "Nombre de portes: " . $voiture->getNbrPortes() . "<br>";
    echo "Le véhicule " . $voiture->getMarque() . " est " . $status . "<br>";
    if ($voiture->getVitesseActuelle() == 0) {
        echo "Sa vitesse actuelle est nulle car elle n'est pas démarrée<br>";
    }
    else {
        echo "Sa vitesse actuelle est de: " . $voiture->getVitesseActuelle() . " km/h<br>";
    }
    $voiture->call_autonomie_elec();

    echo "<br><br>";
    $i += 1;
}
