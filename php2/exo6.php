<?php

$elements = array("Monsieur", "Madame", "Mademoiselle");
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($array) {
    $finalOutput = "<select style='position:relative; margin:0 auto; justify-content:center;'><option value=''>--Choisissez une option--</option>";
    foreach ($array as $elem) {
        $finalOutput .= "<option value='$elem'>$elem</option>";
    }
    $finalOutput .= "</select>";

    echo $finalOutput;
}

?>