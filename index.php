<?php 

    // include('ninjas.php');
    // require('ninjas.php');
    // include fails gracefully, require causes fatal error

    require 'ninjas.php';
    include 'ninjas.php';
    echo 'end of php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Tutorials</title>
</head>
<body>
    
    <?php include('content.php') ?>
    <?php include('content.php') ?>
    <?php include('content.php') ?>

</body>
</html>