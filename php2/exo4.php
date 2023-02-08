<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome", "Espagne"=>"Madrid");

asort($capitales);

function afficherTableHTML($capitales) {
    $finalOutput = "<table style='border:1px solid black;'>
                <thead>
                    <tr>
                        <th colspan='3'>Tableau</th>
                    </tr>
                </thead>
                <tbody>
                <tr style='font-weight:bold;'>
                    <td style='border:1px solid black;'>Pays</td>
                    <td style='border:1px solid black;'>Capitale</td>
                    <td style='border:1px solid black;'>Lien wiki</td>
                </tr>";

    foreach ($capitales as $capitale=>$value) {
        $capitaleCaps = strtoupper($capitale);
        $link = 'https://fr.wikipedia.org/wiki/' . $value;
        $outputloop = "<tr>
                        <td style='border:1px solid black;'>$capitaleCaps</td>
                        <td style='border:1px solid black;'>$value</td>
                        <td style='border:1px solid black;'><a href=$link style='color:blue;text-decoration:underline;'>Lien</a></td>
                    </tr>";
        $finalOutput .= $outputloop;
    }
    $finalOutput .= "</tbody></table>";

    echo $finalOutput;

}

afficherTableHTML($capitales);

?>