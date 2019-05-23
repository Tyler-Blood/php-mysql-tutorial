<?php 

    define('NAME', 'Yoshi');

    // $name = "yoshi";
    $age = 30;

    // $name = 'Mario';
    define('NAME', 'mario');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorials</title>
</head>
<body>
    
    <h1>User Profile Page</h1>

    <div><?php echo NAME; ?></div>
    <div><?php echo $age; ?></div>

</body>
</html>