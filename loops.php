<?php

# LOOPS - Execute codes set number of times

/*
 * For
 * While
 * Do--While
 * Foreach
 */

# For
 // @prams - Init, condition, inc
//for($i = 0; $i <= 10; $i++){
//    echo 'Number ' . $i;
//    echo '<br>';
//}

# While Loop
// @params - condition
//$i = 0;
//while($i <= 10){
//    echo $i;
//    echo '<br>';
//    $i++;
//}

# Do...while
// @params - condition

//$i = 0;
//do {
//    echo $i;
//    echo '<br>';
//    $i++;
//}
//while ($i <= 10);

#Foreach - for arrays

$peaple = array('Sohaib' => 'sohaib@gmail.com', 'Daniyal' => 'daniyal@hotmail.com', 'Kashan' => 'kashan@yahoo.com');

foreach ($peaple as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
    
}
