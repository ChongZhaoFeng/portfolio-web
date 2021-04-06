<?php

$dbServername = "localhost";
$dbUsername = "zf";
$dbPassword = "";
$dbName = "portfolio";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected Successfully"

?>
