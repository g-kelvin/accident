<?php 
$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$id=$_GET['id'];
 
 $approve=mysqli_query($connection,"UPDATE accident set status='confirmed' where id='$id'");
 if($approve)
 {
 	echo "success";
 	
 	header('refresh:3;url=approveaccident.php');
 }
 else
 {
 	echo "failure";
 }

 ?>
