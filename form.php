<?php
include("include/config.php");
// reference variables
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO contact(name,email,message)VALUES('$name','$email','$message')";

    if(mysqli_query($con,$sql)){
        echo"<script> confirm('Your message has successfully been sent, Thank You!');</script>";
        echo"<script>window.location='index.php';</script>";
    }else{
        echo"<script>alert('Your message could not be sent. Please try again.');</script>";
        echo"<script>window.location='index.php';</script>";
    }
    
?>