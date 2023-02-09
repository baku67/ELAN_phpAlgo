<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeatImg($link, $nbr) {

    $output = "";

    for ($i = 0; $i < $nbr; $i++) {
        $output .= "<img src='$link'>";
    }

    echo "<h1>Exerice 8</h1><br>" . $output;
}

repeatImg($url, 4);

?>