<!DOCTYPE html>
<html>
<head>
	<title>logging in...</title>
	<link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body>

</body>
</html>
<?php 
error_reporting();
session_start();
$email=$_POST['email'];
$password=hash('sha256', $_POST['password'] );

$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$qry=mysqli_query($connection,"SELECT * FROM users WHERE  email='$email' AND password='$password'");
$num = mysqli_num_rows($qry);

if($num < 1) {
	echo "<br><br><br><br><br><br><br>";
	echo "<center>Wrong email or password</center>";
	header("refresh:3;url=form.php");
}
else {
$user = mysqli_fetch_array($qry);//save the user information in an array.
$station = $user['station'];//takes the station
$status = $user['status'];

$id = $user['id'];
$_SESSION['id'] = $id;
if($station=='police')//to determine whether the person logging in to the system is a police
{

if ($status=='confirmed') {
  echo "<br><br><br><br><br><br><br>";
	echo "<center>welcome police department</center>";
  header("refresh:2;url=../police/policehome.php");//redirect police to their page and refresh it after two second

}
else
{ 
	echo "<br><br><br><br><br><br><br>";
	echo "<center>Sorry , your request to join is pending</center>";
	header("refresh:2;url=form.php");
}
}

else if ($station=='hospital') {
	if ($status=='confirmed') {
		echo "<br><br><br><br><br><br><br>";
		echo "<center>welcome doctors department</center>";
	
	 header("refresh:2;url=../hospital/hospitalhome.php");//redirect the page and refresh it after two second

	}
	else
	{
		echo "<br><br><br><br><br><br><br>";
		echo "<center>Sorry, your request to join is pending</center>";
	header("refresh:2;url=form.php");
	}
	}
else if ($station=='firestation') {
	if ($status=='confirmed') {
		echo "<br><br><br><br><br><br><br>";
		echo "<center>welcome fire fighters department</center>";
	 header("refresh:2;url=../fire/firehome.php");//redirect firefighters to thier page and refresh it aftre two second
		
	}
	else
	{

		echo "<br><br><br><br><br><br><br>";
		echo "<center>Sorry,your request to join is pending</center>";
	header("refresh:2;url=form.php");
	}
	
}

else {
	echo "<br><br><br><br><br><br><br>";
	echo "<center>you have no account</center>";
}
}



 ?>
