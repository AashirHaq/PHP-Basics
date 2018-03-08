<?php

#Arrays - variable that holds multiple values
/*
 *  - Indexed
 *  - Associative
 *  - Multi-dimensional
 */

// Indexed
$people = array('Daniyal', 'Sohaiab', 'Nabeel', 'Kashan');
$cars = ['Mehrab', 'Civic', 'Accord'];
$cars[] = 'Honda';

//print_r($cars);
//var_dump($cars);
//echo '<br />'.count($people);
//echo '<br />'.$cars[3];

//Associative Arryas
$people = array('sohaib' => 21, 'kashan' => 22);
$people['Daniyal'] = 25;
$ids = [22 => 'kashan', 21 => 'sohaib'];

//echo $people['kashan'];
//echo $ids[22];
//echo $people['Daniyal'];
//print_r($people);
//var_dump($people);

//Multi-Dimensional Arrays
$cars = array(
    array('Toyota', 30, 10),
    array('Honda', 25, 12),
    array('Suzuki', 50, 37)
);
echo 'Car: '.$cars[2][0]. ' Total: '. $cars[2][1]. ' Sold: '. $cars[2][2];
?>

