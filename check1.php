<?php
include('connection.php');
$email=$_REQUEST["emailid"];
$password=$_REQUEST["password"];

$con=mysqli_connect("localhost","root","","library");
$q="select * from admin_page where emailid='". $email ."' and password='". $password ."'";
$res=mysqli_query($con,$q);

if(mysqli_num_rows($res)>0)
{
    header("Location:books.php");
}
else
{
    echo "<script>alert('Email/Pass Does not Match')</script>";
    header("Location:Login.php");  
}


?>