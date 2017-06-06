<?php 
error_reporting(0);
session_start();
$id=$_GET['id'];
$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');

$qry=mysqli_query($connection,"DELETE FROM accident where id='$id'");

if ($qry)
 {
	echo "<div id='delete'><h1><center>deletion done successfully</center></h1></div>";
	header("refresh:3;url=deleteaccident.php");
}
else
{
	echo "deletion failed";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>delete post</title>
 	<link rel="stylesheet" type="text/css" href="../home/index.css">
 </head>
 <body>
 
 </body>
 </html>