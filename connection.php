<?php



$username="root";
$password="";
$server="localhost";
$db="library";

$con= mysqli_connect($server,$username,$password,$db);


if($con)
{
	// echo "connection successful";
}else
{
echo "No connection";
die("no conencetion" . mysqli_connect_error());
}



?>