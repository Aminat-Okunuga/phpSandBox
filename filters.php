<?php 
    // check for posted data
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'DAta Found';
    } else{
        echo 'No Data';
    }


    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // Remove Illegal Chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email. '<br>';

        // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        if(filter_input($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }else{
            echo 'Email is not valid';
        }
    } 

// validating integers
    $var = 23;
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. 'is a number';
    } else{
        echo $var. 'is NOT a number';
    }

// sanitize input of integre type
    $number = '23rehreury4489j';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    // filter special chars
    $var = '<script>alert(1)</script>';
    echo $var;
    echo filter_var($var, FILTER_SANITIZE_CHARS);
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    $filters = array(
        "data" => FITER_VALIDATE_EMAIL,
        "data2"=>array(
            "filter"=> FILTER_VALIDAT_INT,
            "options"=> array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
            );
            print_r(filtrate_input_array(INPUT_POST, $filters));

            $arr = array(
                "name" => "Aminat Okunuga",
                "age" => "25",
                "email" => "brad@email.com"
            );

            $filters = array(
                "name" => array(
                    "filter" => FILTER_CALLBACK,
                    "options" => "ucwords"
                ),
                "age" => array(
                    "filter" => FILTER_VALIDATE_INT,
                    "options" => array(
                        "min_range" => 1,
                        "max_range" => 120
                    )
                    ),
                    "email" => FILTER_VALIDATE_EMAIL
                );
                print_r(filter_var_array($arr, $filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<button type="submit">Submit</button>
 
</form>