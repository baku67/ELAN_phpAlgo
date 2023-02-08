<?php

$input = "08-02-2023";

function writeDate($inputDate) {
    $date = new DateTime(date('d-m-Y', strtotime($inputDate)));


    echo 'TEST $date : ' . $date->format('Y-m-d') . '<br>';
    echo 'TEST jour: ' . date('l', strtotime($inputDate)) . '<br>';
    echo 'TEST nbr: ' . date('w', strtotime($inputDate)) . '<br>';
    echo 'TEST nbr: ' . date('N', strtotime($inputDate)) . '<br>';
}

writeDate($input);

?>