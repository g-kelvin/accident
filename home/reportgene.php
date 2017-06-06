<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

session_start();
$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
$qry=mysqli_query($connection,"SELECT * FROM accident order by time asc");
$new=time();
$today=gmdate("y-m-d,$new");
while ($result=mysqli_fetch_array($qry)) {
	if ($today==$result['time']) {
		$description=$description['description'];
		echo $description;
		echo "love you";
	}
}
 ?>
</body>
</html>