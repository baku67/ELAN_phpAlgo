<?php

$elements = array("Monsieur", "Madame", "Autre");

function radioForm($array) {
    $output = "<form style=''>";

    foreach ($array as $elem) {
        $output .=
            "<label for='$elem'>$elem</label>
        <input id='$elem' name='$elem' type='radio'><br>";
    }

    $output .= "</form><script>document.getElementById('Autre').checked = true;</script>";

    echo $output;
}

radioForm($elements);


?>