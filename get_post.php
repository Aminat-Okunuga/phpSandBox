<?php

// Get Method
    if(isset($_GET['name'])){
        // print_r($_GET);
       $name = htmlentities($_GET['name']);
    //    $email = htmlentities($_GET['email']);
    //    echo $name;
    }
/*
// Post Method
    if(isset($_POST['name'])){
        print_r($_GET);
       $name = htmlentities($_POST['email']);   //preventing cross site scripting
       echo $name;
    }

    // Request method - it works wit hthe GET action of form attribute
    if(isset($_REQUEST['name'])){
        print_r($_GET);
       $name = htmlentities($_POST['email']);   //preventing cross site scripting
       echo $name;
    }
    */
    echo $_SERVER['QUERY_STRING'];  //works with GET method
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form action="" method="GET" action="get_post.php">
    <div>
    <label for="Name">Name:</label><br>
    <input type="text" name="name">
    </div>
    <div>
    <label for="Email">Email:</label><br>
    <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
    </form>
    <ul>
    <li><a href="get_post.php?name=Brad">Brad</a></li>
    <li><a href="get_post.php?name=Aminat">Aminat</a></li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>