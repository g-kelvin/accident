<!DOCTYPE html>
<html>
<head>
	<title>approve accident</title>
	<link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body>

<div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div> 
	
	<div id="pos">
	<br>
<a href="policehome.php"style="text-decoration:none; color:black;"><b><label style="color:white" >HOME </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

      <a href="displaypending.php" style="text-decoration:none; color:black;"><b><label style="color:white" >PENDING-ADMINS</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="displayapproved.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVED-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
            
                <a href="report.php"style="text-decoration:none; color:black;"><b><label style="color:white" > REPORT </label></b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           
       <a href="deleteaccident.php"style="text-decoration:none; color:black;"> <b><label style="color:white" >DELETE-ACCIDENT </label> </b></a>
</div>
</div>
<br><br><br><br><br>
<label style="color:white">
<div id= "formbackground" >
      <br>
	<h5 ><center>All PENDING ACCIDENTS</center></h5>

	<ul class="accident-list">
	<?php
		$connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
		
		if(empty($_GET['page']) || $_GET['page']=="1")
		{
			$page1=0;
		}
		else{
			$page1=($_GET['page']*1)-1;
		}
		$Accidents = mysqli_query($connection, "SELECT * FROM accident WHERE status = 'pending' ORDER BY id DESC LIMIT $page1,1");
		$time=time();
		if(mysqli_num_rows($Accidents) < 1) {
			if(empty($_GET['page'])) {
				echo "You have reached the end <br />";
			}else {
				$back = $_GET['page'] - 1;
			echo "You have reached the end <br />";
			echo "<a href='approveaccident.php?page=$back'><b>Previous Page</b></a>";
        
        	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			}
			
		} else {
			while($row = mysqli_fetch_array($Accidents)) {
			$description = $row['description'];
			$time=$row['time'];
			$picture = $row['picture'];
			$id = $row['id'];
			echo "<li>
				<img src='../photos/$picture' />
				<br><br>
				<span class='list-content'>$description</span>
				 <br><br><br> ".gmdate("M d Y h:m:s a", $time)."<br>
				 <a href='approve.php?id=$id' type='button'><button><b>Approve<b></button></a>
			</li><br />";

		}
		$Accidents1 = mysqli_query($connection, "SELECT * FROM accident WHERE status = 'pending' ORDER BY id DESC");
		
		echo "<br>";
		$page = $page1+1;
		$back=$page-1;
		echo "<a href='approveaccident.php?page=$back'><b>Previous Page</b></a>";
        
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

		$next=$page+1;
		echo "<a href='approveaccident.php?page=$next'><b>Next Page</b></a>";
		}
		

	     ?>
	</ul>
</div>
</label>
</body>
</html>