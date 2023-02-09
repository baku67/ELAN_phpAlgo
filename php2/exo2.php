<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");

ksort($capitales);

function afficherTableHTML($capitales) {
    $finalOutput = "<h1>Exercice 2</h1>
    <table style='border:1px solid black;'>
        <thead>
            <tr>
                <th colspan='2'>Tableau</th>
            </tr>
        </thead>
        <tbody>";

    foreach ($capitales as $capitale=>$value) {
        $capitaleCaps = strtoupper($capitale);
        $outputloop = "<tr>
                        <td style='border:1px solid black;'>$capitaleCaps</td>
                        <td style='border:1px solid black;'>$value</td>
                    </tr>";
        $finalOutput .= $outputloop;
    }
    $finalOutput .= "</tbody></table>";

    echo $finalOutput;

}

afficherTableHTML($capitales);

?>