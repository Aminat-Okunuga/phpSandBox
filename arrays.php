<?php
#Array - Variable that holds multiple values
/*
    -Indexed
    -Associative
    -Multidimentional
*/
// Indexed
$people = array('AminatCanCode', 'Elvis', 'Fola', 'Samuel', 'Anjola');

$ids = array(23, 44, 89);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = ['Venza'];   //This is wrong, it's gonna flag an array to string conversion error
$cars[3] = 'Venza'; //Adding an item to an array with the index known
$cars[] = 'Mazda';  //Adding an item to an array without knowing the index.

// echo $people[0];    //arrays are zero-based
// echo $cars[4];    //arrays are zero-based
  
#functions used with an array
// echo count($cars);  //Display the total number of items in an array
// print_r($cars); //prints the entire array 
// var_dump($cars);    //displays everything you need to know about an array: data type, indices,total number of items in the array and the character lenght of each item.

# Associative Array -A key and value pair
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
echo $people['Brad'];   //This displays the value of the key 'Brad'

$ids = [22 => 'Brad', 44 => 'Jose', 63=> 'Williams'];
// echo $ids[22];

$people['Jill'] = 42;   //adding a new item to an associative array
echo $people['Jill'];
print_r($people);
var_dump($people);


// Multi-Dimensional Array -arrayinside an array
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 40, 30),
    array('Mazda', 26, 90)
);
echo ($cars[1][1]);
echo json_decode($cars[1][2]);

?>