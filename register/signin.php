<?php 
error_reporting(0);
session_start();
//put all the table fields into post
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$station=$_POST['station'];
$email=$_POST['email'];
$password=hash('sha256', $_POST['password']);
//conncet to the database to enable insert data into the database
$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$qry=mysqli_query( $connection," INSERT INTO users (firstName,lastName,gender,station,email,password,status) VALUES('$firstName','$lastName','$gender','$station','$email','$password','pending')" );
if ($qry) {
	echo "<center><div id='userspost'><h3>Registration was successful, wait for your request to be approved</h3></div></center>";
	  header("refresh:3;url=login.php");
}
else
{
	echo "try again";
}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Register</title>
 	<link rel="stylesheet" type="text/css" href="../home/index.css">
 </head>
 <body>
 
 </body>
 </html>
