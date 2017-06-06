<!DOCTYPE html>
<html>
<head>
  <title>police home</title>
  <link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body>
<div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div> 
  
  <div id="pos">
  <br>
      
       <a href="report.php" style="text-decoration:none; color:black;"><b><label style="color:white" >GO BACK</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

       <a href="policehome.php" style="text-decoration:none; color:black;"><b><label style="color:white" >HOME</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>


      <a href="displaypending.php" style="text-decoration:none; color:black;"><b><label style="color:white" >PENDING-ADMINS</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="displayapproved.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVED-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="approveaccident.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVE-ACCIDENTS </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

       <a href="deleteaccident.php"style="text-decoration:none; color:black;"> <b><label style="color:white" >DELETE-ACCIDENT </label> </b></a>
</div>
</div>
<br><br><br><br><br>
</body>
</html>

<?php 
   session_start();
   $id=$_GET['id'];
  
 echo "<label style='color:white' id='formbackground'>";


   $connection=mysqli_connect('localhost','root','flamigo','accidentsystem');

   $fetch=mysqli_query($connection,"SELECT policereport.policeReport , police.location, police.name FROM policereport INNER JOIN police ON police.id=policereport.policeID WHERE policereport.accidentId = '$id' ");
  	print("<br><ul><center><div id='report'>");
while ($i= mysqli_fetch_array($fetch)) {
	$policeReport=$i['policeReport'];
     $location=$i['location'];
     $name=$i['name'];
	 print("<li><b>Fire Report:</b><br> $policeReport");
  print(" <br><b>Location Of The Station:</b><br> $location  ");
  print("<br> <b>Name Of The Station:</b><br> $name</li><hr>");
}

print("</div></center></ul>");
echo "</label>";
 
 ?>
 