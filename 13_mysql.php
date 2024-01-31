<?php


echo "Welcome to my sql session"; echo "<br>";
echo "The stage where we are ready to get connected to the database-------------- Lets go!";

// ways to connect to a mysql database
// 1. Mysqli extension ----two ways--- procedural / object oriented
// 2. Pdo --PHP Data objects

// connecting to a database
$servername = "localhost";
$username = "root"; //---default value
$password = "";

// create a connection
$conn = mysqli_connect( $servername , $username , $password);
echo "<br>";
// die if connection was not succesful
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error()); 
    
}
//  mysqli_connect_error()--php function that print error
// die()--function that  print a  message and exit the current script

else{
    echo "Connection was succesful";
}
echo "<br>";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `connection`.`php-form` (`name`,`age`,`gender`,`email`,`phone`,`doc`) VALUES('$name','$age','$gender','$email','$phone',current_timestamp());";

    // connection --- database name and php-form is basically table name
    // echo $sql;

    if($conn -> query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();

?>


?>