<?php
# FUNCTION - Block of code taht can be repeatedly called
/*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
*/

// defining a function
function simpleFunction(){
    echo 'Yaah...AminatCanCode Made it!';
}

// Call Simple Function
simpleFunction();

// function with Param
function sayHello($name = 'My Name'){   //setting a default parameter
    echo 'Hello $name <br>';
}
sayHello('Joe');
sayHello();

// Return value
function addNumbers($num1, $num2){
    // echo $num1 + $num2;
}

echo addNumbers(2,3);

// By Reference
$myNum = 10;

function addFive($num){ //By Value - takes whatever value it is without modification
    $num += 5;
}

function addTen(&$num){ //by reference - takes the value and modify
    $num += 10;
}
addFive($myNum);
echo "Value: $myNum<br>";

// addTen($myNum);

addTen($myNum);

echo "Value: $myNum<br>";
?>

