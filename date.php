<?php
echo date('d');  //Day in number
echo date('m');  //Month in number
echo date('Y');  //Year in number
echo date('l'); //Day of the week

echo('Y/m/d');   //combining all
echo('m-d-Y');   //combining all

echo date('h');  //hour
echo date('i'); //Min
echo date('s'); //seconds
echo date('a'); //AM or PM
date_default_timezone_set('America/New_York');  //default time zone
echo date('h:i:sa');

//making a timestamp
$timestamp = mktime(10, 14,54,9, 10, 1993);
echo $timestamp;
//converting it to a date function
echo date('m/d/Y h:i:sa', $timestamp);
$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Months');
$timestamp6 = strtotime('+2 Days');
echo $timestamp2;
echo date('m/d/Y h:i:sa', $timestamp2);



?>