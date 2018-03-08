<?php

# Functions - Block of code that can be repeatedly call

/*
 * Camel Case - myFunction()
 * LowerCase - my_function()
 * Pascal Case - MyFunction() - usually use for classes 
 */

#Create function
//function myFunc (){
//    echo 'Hello Function';
//}
////run function
//myFunc();

#funtion with param
//function sayHi ($name = 'Default name'){
//    echo 'Hi ' . $name;
//}
//
//sayHi('Kashan');

# Return value
//function addNumbers($num1, $num2){
//    return $num1 + $num2;
//}
//
//echo addNumbers(2, 5);

#By Reference

$myNum = 2;

function addFive ($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);
echo "Value: $myNum <br>";

addTen($myNum);
echo "Value: $myNum";
