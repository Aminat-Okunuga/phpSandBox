<?php
    #LOOPS - Execute code set number of times
    /*
        Types of loops
        For
        Do...while
         class="while">foreach
    */

    #For Loop - end point is known
    #@params - init, condition, increment
    // Display numbers from 0 to 10
    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo '<br/>';
    }

    #while Loop - used when the set condition or number isn't known
    # @params -condition
    $i = 0;
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }

    # Do...while
    #  class="while"># @params - condition

    do{
        echo $i;
        echo '<br>';
        $i++;
    }

    while($i < 10);

    #foreach Loop - For arrays]
    $people = array('Brad' =>'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'Williams' => 'william@email.com');

    foreach ($people as $person => $email){
        echo $person. ': ' .$email;
        echo '<br>';
    }
?>