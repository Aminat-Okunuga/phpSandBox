<?php
    if(isset($_GET['name'])){
        print_r($_GET);
        echo $_GET['email'];
    }
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
    <label for="Name:"></label>
    <input type="text" name="name">
    </div>
    <div>
    <label for="Email:"></label>
    <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
    </form>
</body>
</html>