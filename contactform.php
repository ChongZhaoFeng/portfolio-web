<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'portfolio';

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected Successfully"


$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];

$query=mysqli_query($conn,"INSERT INTO contactform(firstname, lastname, email, description) 
                            VALUES ('$firstname'),('$lastname'),('$email'),('$subject') ") 
                            or die(mysqli_error($conn));

mysqli_close($conn);

header("location:index.html?note=success");


?>
