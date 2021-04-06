<?php

include('connectdb.php');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$query=mysqli_query($conn, "INSERT INTO contactform (firstname, lastname, email, description)
        VALUES ('$firstname', '$lastname', '$email','$subject')") or die (mysqli_error($conn));
                            
mysqli_close($conn);

$mailTo = "zfchong009@gmail.com";
$headers = "From: Portfolio Website";
$txt = "You have received an email from ".$lastname.".\n\n".$subject;

mail($mailTo,$subject,$txt,$headers);



header("location:index.html?note=success");


?>
