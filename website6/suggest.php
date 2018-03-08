<?php
//People Array @TODO - Get from DB

$people[] = "Sohaib";
$people[] = "Daniyal";
$people[] = "Kashan";
$people[] = "Nabeel";
$people[] = "Khan";
$people[] = "Pathan";
$people[] = "Majeed";
$people[] = "Ali";
$people[] = "Aashir";
$people[] = "Bilal";

// Get Query String
$q = $_REQUEST['q'];

$sugeestion = "";

//Get Suggestions
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person){
        if (stristr($q, substr($person, 0, $len))) {
            if ($sugeestion === "") {
                $sugeestion = $person;
            }else{
                $sugeestion .= ", $person";
            }
        }
    }
}

echo $sugeestion === "" ? "No Suggestion" : $sugeestion;