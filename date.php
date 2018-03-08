<?php

//echo date('d'); //Day
//echo date('m'); //Month
//echo date('y'); //Year
//echo date('l');   //Day of the week


//echo date('y-m-d');

//echo date('h').'<br>';  //Hour
//echo date('i').'<br>';  //Minute
//echo date('s').'<br>';  //second
//echo date('a').'<br>';  //AM or PM

//set time zone

date_default_timezone_set('Asia/Karachi');
//echo date('h:i:sa');

/*
 * unix timestamp is a long integer containing the number
 * of seconds betwenn the unix Epoch (january 1 1970 00:00:00 GMT)
 * and the time specified.
 */

$timestamp = mktime(13,14,54,3, 16, 1994);
//echo $timestamp;

//echo date('m/d/y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00 pm march 22 2016');
$timestamp3 = strtotime('next sunday');
$timestamp4 = strtotime('+2 years');
//echo $timestamp2;

echo date('m/d/y h:i:sa', $timestamp4);