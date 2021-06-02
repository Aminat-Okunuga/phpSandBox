<?php
    #Conditionals
    /*
    ==  -test for actual value
    ===  -test for actual value and data type
    <
    >
    <=
    >=
    !=
    !==
    */
    $num = 5;
    if($num == 5){
        echo '5 passed';
    }elseif($num == 6){
        echo '$num passed';
    } 
    else{
        echo 'did not pass';
    }

    #Nesting if
    $num = 5;
    if ($num > 5){
        if($num < 10){
            echo "$num passed";
        }
    }

    /*
        Logical operators
        and &&
        or ||
        xor  one has to be true but not both
    */

    if($num > 4 XOR $num < 10){
        echo "$num passed";
    }
?>