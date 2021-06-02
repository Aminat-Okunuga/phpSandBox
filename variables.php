<?php
// Single line comment
#Single line comment
/*
    Multiline 
    Comment
*/
#Variables
/*
    - Prefix $
    -Start with a letter or an underscore
    - Only letters, numbers and underscores
    - Case sensitive
*/

#Data Types
/*
    Sring
    Integers
    floats
    Boolean
    Arrays
    Objects
    NULL
    Resource //function
*/
$output = "So close to achieving it!";
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 .' '. $string2.'!';    //conacatenation
$greeting2 = "$string1 $string2";    //stings with single quote will display correctly in a double quote

#escape sequences
$string3 = 'They\'re Here';
$string3 = "They're Here";
$string3 = "They\"re Here";

#constants
define('GREETING', 'Hello Everyone');    //a constant takes two parameters: name(always in uppercase) and the value of the constant(always in quote)
define('GREETING', 'Hello Everyone', true);    //constants are case sensitive by default, set the third parameter to true to make them case insensitive
$float1 = 4.4;
$bool1 = true;

echo $greeting2;
echo GREETING;  //calling a constant has to be exactly the way it was declared(in capital). They are case sensitive by default
?>