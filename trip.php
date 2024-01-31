<?php


$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server , $username , $password);

if(!$con){
    die("connection to this database failed due to " . mysqli_connect_error());
}
else{
    // echo "Success connection to db";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "INSERT INTO `trip`.`data` (`name`, `email`, `phone`, `dt`) VALUES ('$name', '$email', '$phone', current_timestamp())";

// echo $sql;


if($con -> query($sql) == true){
    echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();


?>

