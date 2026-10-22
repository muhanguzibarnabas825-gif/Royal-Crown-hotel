<?php

include 'conection.php';

// Receive data from the form
if(isset($_POST['fname'])){
$fullname = $_POST['fname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$course = $_POST['course'];

// SQL query
$sql = "INSERT INTO registration(fname,email,contact,course)
VALUES('$fname','$email','$contact','$course')";

// Execute query
if(mysqli_query($conn,$sql))
{
    echo "asiimwe Saved Successfully";
}
else
{
    echo "Error: ".mysqli_error($conn);
}
}
?>