<?php

    $nomsInput = array("Nom", "Prénom", "Ville");
    afficherInput($nomsInput);

    function afficherInput($array)
    {

        $outputFinal = "<h1>Exerice 5</h1><br>
        <form style='display:flex; flex-direction:column; margin:0 auto; width:25%;'>";

        foreach ($array as $champ) {
            $outputFinal .= "<label for='$champ' style='margin-top: 10px;'>$champ</label>
            <input name='$champ' type='text' placeholder='Entrez votre $champ'>";
        }

        $outputFinal .= "</form>";

        echo $outputFinal;
    }

?>