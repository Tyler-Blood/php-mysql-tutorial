<?php 

    // MySQLi
    // connect to database
    $conn = mysqli_connect('localhost', 'tyler', 'test1234', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    // make query and get results
    $result = mysqli_query($conn, $sql);

    // fetch resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
    
    print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>    

    <?php include('templates/footer.php'); ?>    

</html>