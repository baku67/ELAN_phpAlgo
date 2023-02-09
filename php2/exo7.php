<?php

$elements = array("Choix 1" => "checked", "Choix 2" => "notChecked", "Choix 3" => "checked");
genererCheckbox($elements);

function genererCheckbox($array) {
    $finalOutput = "<h1>Exerice 7</h1><br>
    <fieldset style='display:flex; flex-direction:column; width:25%; margin:0 auto; text-align:center;'>";

    foreach ($array as $elem=>$value) {

        if ($value == "checked") {
            $checked = "checked";
        }
        else {
            $checked = "";
        }

        $finalOutput .=
            "<label for='$elem'>$elem</label>
            <input type='checkbox' name='$elem' $checked>
            <br>";
    }

    $finalOutput .= "</fieldset>";

    echo $finalOutput;

}

?>