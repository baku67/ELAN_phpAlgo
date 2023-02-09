<?php

$elements = array("Monsieur", "Madame", "Autre");

function radioForm($array) {
    $output = "<h1>Exerice 9</h1><br>
    <fieldset style=''>";

    foreach ($array as $elem) {
        $output .=
            "<label for='$elem'>$elem</label>
        <input id='$elem' name='$elem' type='radio'><br>";
    }

    $output .= "</fieldset><script>document.getElementById('Autre').checked = true;</script>";

    echo $output;
}

radioForm($elements);


?>