<?php
include('connection.php');
$email=$_REQUEST["emailid"];
$password=$_REQUEST["password"];

$con=mysqli_connect("localhost","root","","library");

$q="SELECT `password` FROM `student1` WHERE  emailid='". $email ."'";
$res=mysqli_query($con,$q);


if($res==$password)
{

    header("Location:home.php");
}
else
{
    echo "<script>alert('Email/Pass Does not Match')</script>";
    header("Location:home.php");  
}


?>
