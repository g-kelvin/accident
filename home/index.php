<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div>
	
	<div id="pos">
      <a href="../register/form.php" style="text-decoration:none; color:black;"><b><label style="color:white">REGISTER</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="../register/login.php"style="text-decoration:none; color:black;"><b><label style="color:white">LOG IN</label> </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="about.html"style="text-decoration:none; color:black;"><b><label style="color:white">ABOUT US </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

       <a href="../users/users.php"style="text-decoration:none; color:black;"> <b><label style="color:white">POST ACCIDENT </label></b></a>
</div>
</div>
<br><br>
<div>
<div id="homeleftp" style="color:white">


	<p>
	<h3><center>CONFIRMED ACCIDENTS</center></h3>
		<?php
		$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
		
		if(empty($_GET['page']) || $_GET['page']=="1")
		{
			$page1=0;
		}
		else{
			$page1=($_GET['page']*1)-1;
		}
		$Accidents = mysqli_query($connection, "SELECT * FROM accident WHERE status = 'confirmed' ORDER BY id DESC LIMIT $page1,1");
		$time=time();
		if(mysqli_num_rows($Accidents) < 1) {
			if(empty($_GET['page'])) {
				echo "You have reached the end <br />";
			}else {
				$back = $_GET['page'] - 1;
			echo "You have reached the end <br />";
			echo "<a href='index.php?page=$back'><b>Previous Page</b></a>";
        
        	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			}
			
		} else {
			while($row = mysqli_fetch_array($Accidents)) {
			$description = $row['description'];
			$picture = $row['picture'];
			$time=$row['time'];
			$id = $row['id'];
			echo "<li>
				<img src='../photos/$picture' />
				<br><br>
				<span class='list-content'>$description</span>
				<br><br>
				".gmdate("M d Y h:m:s a", $time)."
				 <br><br>
			</li><br />";

		}
		$Accidents1 = mysqli_query($connection, "SELECT * FROM accident WHERE status = 'confirmed' ORDER BY id DESC");
		
		echo "<br>";
		$page = $page1+1;
		$back=$page-1;
		echo "<a href='index.php?page=$back'><b>Previous Page</b></a>";
        
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

		$next=$page+1;
		echo "<a href='index.php?page=$next'><b>Next Page</b></a>";
		}
		

	     ?>
		
	</p>
	<br><br>
</div>
<div id="homemidp" style="color:white">
		<CENTER><h1>USERS PAGE</h1></CENTER>
<div id="picha">
		<img src="back.jpg">
      </div>

     <br><br><br><br><br><br><br><br><br>
		<H5 style="color:red"><center>SAY NO TO MORE ACCIDENTS!!!!!</center></H5>
</div>

<div id="homerightp" style="color:white" >
<center>
	<p>
		<h3>CONTACT US</h3>
		<br><br>
		To communicate to use:
		<br><br>
	    Telephone: 0792945999 or 0705382606.
	    <br><br>
	    Facebook: Accidents_kenya.
	    <br><br>
	    Twitter: @accident_kenya.
	    <br><br>
	    Email:www.accidentskenya.com.
	</p>
	</center>
	<br><br><br>
</div>
</div>
</body>
</html>