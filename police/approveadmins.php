<?php 
error_reporting(0);
session_start();
$id=$_GET['id'];
echo "$id";

$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$qry=mysqli_query($connection, "UPDATE users set status='confirmed' where id='$id'");
if($qry)
{
	echo "<div id='approveadmins'><center><b><h1>ONE Of OF THE ADMIN APPROVED SUCCESSFULLY</h1></b><center></div><";
	header('refresh:3;url=displaypending.php');
}
else
{
	echo "failure";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN APPROVAL</title>
	<link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body>

</body>
</html>