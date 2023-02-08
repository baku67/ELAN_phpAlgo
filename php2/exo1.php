<?php
    function convertirMajRouge($texte) {
        $output = strtoupper($texte);
        echo "<p style='color:red;'>$output</p>";
    }

convertirMajRouge("blbablabla");

?>