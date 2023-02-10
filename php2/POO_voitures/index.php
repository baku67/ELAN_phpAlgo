<!-- Exercice N°13 -->

<?php

require "Voiture.php";


    // (HS) Mini-jeu JS voiture ****************************
    // TODO: 
    // - Voir pour reduire la taille des points (initiaux + ceux incrémenter au début de la ligne) pour smoother le déplacement (revoir les paramètres de la fonction tick ducoup)
    // - Défilement landscape selon vitesse voiture
    // - Fonction de génération du landscape (ajouter des icone fontAwesome 'buildings'), letter-spacing aléatoires?/espaced vides, arbres, lampadaires sur un autre plan!, etc... )
    // - "Choose your challenger" (icon + couleur) ingame ou avant 
    // - Eventlistener "mouse-down" sur les pédales d'accélération/freins
    // - Systeme de compteur de vitesse km/h
    // - Démarrage --> vitesse augmente jusqu'a ~20km/h (supérieur à vitesse mini) en ~1s 
    // - Stopper voiture possible que si vitesse mini atteinte
    // - Le fameux "Pour aller plus loin": Ajouter des obstacles (encore plus loin: aléatoires) sur le path, bouton tir au corp-à-corp ou saut jsp

    echo "<script src='script.js'></script>";
    echo "<link href='style.css' rel='stylesheet'>";
    echo "<script src='https://kit.fontawesome.com/698848973e.js' crossorigin='anonymous'></script>";

    // Landscape mini-jeu (temporaire: faire une fonction pour générer aléatoirement (icon fontAwesome 'buildings', letter-spacing aléatoires, opacity aléatoire ou ajouter une 3eme profondeur de champ, etc):
    echo "<div id='landscapeDiv'><i class='fa-solid fa-building'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i><i class='fa-solid fa-building'></i><i class='fa-solid fa-city'></i></div>";

    echo "<br><div id='miniJeuDiv1'><div id='carPathDiv'><i id='carSmoke' class='fa-brands fa-cloudversify'></i><i class='fa-solid fa-car-side' id='carIcon'></i>......................................................................................................................................</div><span style='letter-spacing:-7px;'><i class='fa-solid fa-flag-checkered' style='position:relative; bottom:-2px;'></i><i class='fa-solid fa-flag-checkered' style='position:relative; top:10px;'></i></span></div><br><span style='position:relative; bottom:26px; left:22px;'>&nbsp;....................................................................................................................................................</span>";
    echo "<div id='parentNode'><button id='slowDownCarButton' class='miniJeuButton'><i class='fa-solid fa-backward'></i></button><button id='initialStartUpCarButton' class='miniJeuButton'>Start</button><button id='speedUpCarButton' class='miniJeuButton'><i class='fa-solid fa-forward'></i></button><span id='miniJeuResult' style='opacity:0; font-size:200%; color:white; background-color:#12c784; padding:5px 15px; border-radius:5px; border:1px solid #418f72;  margin: 5px 20px;'>WIN !</span></div>";
    // Fin mini-jeu voiture*



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
echo $v4->ralentir(500);
echo $v4->printVitesseActuelle();
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
    // Index/Numéro de voiture
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
// Mini-jeu: Boutons de controle de la voiture (H-S: ajout ligne apres refresh page)
echo "<h2>Mini-jeu (H-S: ajout ligne apres refresh page):</h2><br><div style='width:50%; margin: 0 auto; justify-content:center; border:3px solid rgba(0,0,0,0.4); background-color: rgba(0,0,0,0.2);border-radius:5px; padding: 10px 35px;'>
    <form action='index.php' method='post'>
        <input type='submit' id='start' name='start' value='Démarrer/Stopper' class='startAndStopButton buttonMiniJeu'>
        </form>
        <form action='index.php' method='post'>
            <div style='display:inline-flex; border:1px solid rgba(127,127,127,0.5); border-radius:5px; background-color:rgba(127,127,127,0.2); padding:5px 0px; margin: 10px 5px;'><input id='speedUpRange' name='amountSpedUp' type='range' value='10' step='10'><span id='speedValue' style='margin:0 20px 0 10px;'></span></div>
            <input type='submit' id='speedUp' name='speedUp' value='Accélérer' class='validateButton buttonMiniJeu'>
            <input type='submit' id='slowDown' name='slowDown' value='Ralentir' class='cancelButton buttonMiniJeu'>
    </form></div>
    <script>document.getElementById('speedValue').innerHTML = document.getElementById('speedUpRange').value + ' km/h';</script>
    <script>document.getElementById('speedUpRange').onchange = function() {document.getElementById('speedValue').innerHTML = document.getElementById('speedUpRange').value + ' km/h'; document.getElementById('speedValue').classList.add('animVitesse'); setTimeout(function() {document.getElementById('speedValue').classList.remove('animVitesse') },400); }</script>
    ";

if (isset($_POST['start'])) {
    if ($v5->getStatus() == true) {
        // Ajout de code brut dans le fichier
        $fp = fopen("index.php", "a");
        fwrite($fp, 'echo "<br><span style=\"color:red;\">' . date("Y-m-d H:i:s") . ':</span> " . $v5->stopper();');
        fclose($fp);
    }
    else {
        // Ajout de code brut dans le fichier
        $fp = fopen("index.php", "a");
        fwrite($fp, 'echo "<br><span style=\"color:red;\">' . date("Y-m-d H:i:s") . ':</span> " . $v5->demarrer();');
        fclose($fp);
    }
}
else if (isset($_POST['speedUp'])) {
    // Ajout de code brut dans le fichier
    $fp = fopen("index.php", "a");
    fwrite($fp, 'echo "<br><span style=\"color:red;\">' . date("Y-m-d H:i:s") . ':</span> " . $v5->accelerer('.$_POST['amountSpedUp'].') . " "  . $v5->printVitesseActuelle();');
    fclose($fp);
}
else if (isset($_POST['slowDown'])) {
    // Ajout de code brut dans le fichier
    $fp = fopen("index.php", "a");
    fwrite($fp, 'echo "<br><span style=\"color:red;\">' . date("Y-m-d H:i:s") . ':</span> " . $v5->ralentir('.$_POST['amountSpedUp'].');');
    fclose($fp);
}
// FIN Boutons de controle
// *****************************************************************




// Liste actions utilisateur:
echo "<br><span style=\"color:red;\">2023-02-09 23:21:32:</span> " . $v5->demarrer();echo "<br><span style=\"color:red;\">2023-02-09 23:21:34:</span> " . $v5->accelerer(10) . " "  . $v5->printVitesseActuelle();