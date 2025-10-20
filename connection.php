<?php
$servername="localhost";
$username="root";
$password="";
$database="exlogin";
//CREATE CONNECTION

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
	echo "Connection was successful";
}
?>