<!-- Exercice N°13 -->

<?php

require "Voiture.php";

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);
$v3 = new Voiture("Fiat", "Multipla", 38);
$v4 = new VoitureElec("Tesla", "blabla", 4, 26000);
$v5 = new VoitureElec("Joueur", "test", 2, 40000);

$arrayVoitures = array($v1, $v2, $v3, $v4, $v5);

echo "<h1>Exercice 13</h1>";
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




// // Affichage des infos de toutes les voitures
echo "<div style='display:inline-flex; flex-wrap:wrap'>";
$i = 1;
foreach($arrayVoitures as $voiture) {
    // On récupère l'état (démarré/arrèté) de la voiture
    if($voiture->getStatus() == true) {
        $status = "démarrée";
    }
    else {
        $status = "à l'arrêt";
    };
    
    echo "<div style='border:2px solid black; border-radius:5px; padding:15px; background-color:rgba(0,0,0,0.1); width:fit-content; margin:10px;'>";
    echo "Infos véhicule <span style='border:1px solid black;padding:2px;border-radius:222px; line-height:0px;'>" . $i . "</span><br>";
    echo "*****************************<br>";
    echo "Nom et modèle du véhicule: " . $voiture->getMarque() . " <span style='font-weight:bold;'>" . $voiture->getModele() . "</span><br>";
    echo "Nombre de portes: " . $voiture->getNbrPortes() . "<br>";
    echo "Le véhicule " . $voiture->getMarque() . " est " . $status . "<br>";
    if ($voiture->getStatus() == false) {
        echo "Sa vitesse actuelle est nulle car elle n'est pas démarrée<br>";
    }
    else {
        echo "Sa vitesse actuelle est de: " . $voiture->getVitesseActuelle() . " km/h<br>";
    }
    echo "</div>";

    echo "<br><br>";
    $i += 1;
}
echo "</div>";





// ************************************************
// Exercice 14
echo "<br><h2>Exercice 14</h2>";
echo $v1->getInfos();
echo "<br>";
echo $v4->getInfos();
echo "<br><br>";
// ************************************************





// ************************************************************************
// Boutons de controle de la voiture 
echo "<h2>Mini-jeu:</h2><br><div style='width:50%; margin: 0 auto; justify-content:center; border:3px solid rgba(255,0,0,0.4); background-color: rgba(255,0,0,0.2);border-radius:5px; padding: 10px 35px;'>
    <form action='index.php' method='post'>
        <input type='submit' id='start' name='start' value='Démarrer/Stopper'>
        </form>
        <form action='index.php' method='post'>
            <div style='display:inline-flex;'><input id='speedUpRange' name='amountSpedUp' type='range' value='10' step='10'><span id='speedValue' style='margin:0 20px 0 10px;'></span></div>
            <input type='submit' id='speedUp' name='speedUp' value='Accélérer'>
            <input type='submit' id='slowDown' name='slowDown' value='Ralentir'>
    </form></div>
    <script>document.getElementById('speedValue').innerHTML = document.getElementById('speedUpRange').value + ' km/h';</script>
    <script>document.getElementById('speedUpRange').onchange = function() {document.getElementById('speedValue').innerHTML = document.getElementById('speedUpRange').value + ' km/h';}</script>
    ";
if (isset($_POST['start'])) {
    if ($v5->getStatus() == true) {
        echo $v5->stopper();

        // Ajout de code brut dans le fichier
        $fp = fopen("index.php", "a");
        fwrite($fp, 'echo "<br>" . $v5->stopper();');
        fclose($fp);
        // Refresh de la page avec nouvelle ligne 
    }
    else {
        echo $v5->demarrer();

        // Ajout de code brut dans le fichier
        $fp = fopen("index.php", "a");
        fwrite($fp, 'echo "<br>" . $v5->demarrer();');
        fclose($fp);
        // Refresh de la page avec nouvelle ligne 
    }
    // header("Refresh:0");
}
if (isset($_POST['speedUp'])) {
    echo $v5->accelerer($_POST['amountSpedUp']);
    echo $v5->printVitesseActuelle();

    // Ajout de code brut dans le fichier
    $fp = fopen("index.php", "a");
    fwrite($fp, 'echo "<br>" . $v5->accelerer('.$_POST['amountSpedUp'].');');
    fclose($fp);
    // Refresh de la page avec nouvelle ligne 
    // header("Refresh:0");
}
if (isset($_POST['slowDown'])) {
    echo $v5->accelerer($_POST['amountSpedUp']);
    echo $v5->printVitesseActuelle();

    // Ajout de code brut dans le fichier
    $fp = fopen("index.php", "a");
    fwrite($fp, 'echo "<br>" . $v5->ralentir('.$_POST['amountSpedUp'].');');
    fclose($fp);
    // Refresh de la page avec nouvelle ligne 
    // header("Refresh:0")
;}

function appendAction() {

}
// FIN Boutons de controle
// *****************************************************************

// Ajout des actions utilisateur:
echo "<br>" . $v5->demarrer();echo "<br>" . $v5->accelerer(10);echo "<br>" . $v5->accelerer(10);echo "<br>" . $v5->accelerer(10);