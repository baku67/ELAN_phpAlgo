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
echo "
<style>
    input[type=submit] {
        cursor:pointer;
    }
    .buttonMiniJeu {
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 4px;
        transition: all 0.3s;
        border: 1px solid rgba(0,0,0,0.5);
    }
    .validateButton {
        border: 2px solid rgba(14,235,174,1);
    }
    .cancelButton {
        border: 2px solid rgba(235,45,14,0.7);
    }
    .validateButton:hover {
        border-color: rgba(0,0,0,0);
        background-color: rgba(14,235,174,0.8);
    }
    .cancelButton:hover {
        border-color: rgba(0,0,0,0);
        background-color: rgba(235,45,14,1);
    }
    .startAndStopButton {
        border: 2px solid rgba(235,208,14,1);
    }
    .startAndStopButton:hover {
        border-color: rgba(0,0,0,0);
        background-color: rgba(235,208,14,1);
    }
    .animVitesse {
        /* ! timeOut 400 sur le remove de la class */
        animation: animVitesse 0.4s 0s forwards ease-in-out;
    }
    @keyframes animVitesse {
        0% {
            font-size: 100%;
            color: black;
        }
        50% {
            font-size: 110%; 
            color: rgba(14,235,174,1);
        }
        100% {
            font-size: 100%;
            color: black;
        }
</style>";

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



// Animation petite voiture: (split sur la ligne puis replace adjacent?)
echo "<script src='https://kit.fontawesome.com/698848973e.js' crossorigin='anonymous'></script>";
echo "
<script>
setInterval(function() {
    console.log('test');

},2000)
</script>";
echo "<br><div id='carPathDiv'><i id='carIcon' class='fa-solid fa-car-side'></i>*************************************</div><br>";


// Liste actions utilisateur:
echo "<br><span style=\"color:red;\">2023-02-09 15:42:19:</span> " . $v5->demarrer();echo "<br><span style=\"color:red;\">2023-02-09 15:42:24:</span> " . $v5->accelerer(10) . " "  . $v5->printVitesseActuelle();echo "<br><span style=\"color:red;\">2023-02-09 15:42:26:</span> " . $v5->accelerer(10) . " "  . $v5->printVitesseActuelle();echo "<br><span style=\"color:red;\">2023-02-09 15:42:34:</span> " . $v5->accelerer(10) . " "  . $v5->printVitesseActuelle();echo "<br><span style=\"color:red;\">2023-02-09 15:42:36:</span> " . $v5->accelerer(10) . " "  . $v5->printVitesseActuelle();echo "<br><span style=\"color:red;\">2023-02-09 15:46:52:</span> " . $v5->accelerer(10) . " "  . $v5->printVitesseActuelle();