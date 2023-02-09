<?php
    echo 
    "<h2>Exercice 15: Validateur d'adresse mail:</h2>
    <form action='exo15.php' method='post'>
        <input id='mail' name='mail' type='text' placeholder='Entrez une adresse mail'>
        <input type='submit' value='Vérifier la validité'>
    </form><br>";

    if (isset($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            echo "<span style='color:green;'>L'adresse mail \"<span id='mailString' style='font-weight:bold;'>" . $_POST['mail'] . "</span>\" est valide.</span>";
        }
        else {
            echo "<span style='color:red;'>L'adresse mail \"<span id='mailString' style='font-weight:bold;'>" . $_POST['mail'] . "</span>\" n'est pas valide.</span>";
        }
    }


?>