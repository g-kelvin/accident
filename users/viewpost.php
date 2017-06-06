<?php 
error_reporting(0);
//connect with the database accidentsystem
$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$picture=$_POST['picture'];
$description=$_POST['description'];
$time=time();
// echo "<li>$description $picture<li>";
//select from the database and display th selected 
$qry=mysqli_query($connection,"SELECT description, time , picture FROM accident ");
while ($i=mysqli_fetch_array($qry)) {

	$description=$i['description'];
	$time=$i['time'];
	$picture=$i['picture'];
	echo "<li><img src='../photos/$picture' /> $description ".gmdate("M d Y h:m:s a", $time)." <li>";
	
}

 ?>
