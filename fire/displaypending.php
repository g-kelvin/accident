<!DOCTYPE html>
 <html>
 <head>
  <title>display pending</title>
  <link rel="stylesheet" type="text/css" href="../home/index.css">
 </head>
 <body>
 <div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div> 
  
  <div id="pos">
  <br>
      <a href="firehome.php" style="text-decoration:none; color:black;"><b><label style="color:white" >HOME</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

       <a href="deleteAD.php" style="text-decoration:none; color:black;"><b><label style="color:white" >DELETE-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="approveAD.php" style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVE-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="displayapproved.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVED-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
            
                <a href="report.php"style="text-decoration:none; color:black;"><b><label style="color:white" > REPORT </label></b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="approveaccident.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVE-ACCIDENTS </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

       <a href="deleteaccident.php"style="text-decoration:none; color:black;"> <b><label style="color:white" >DELETE-ACCIDENT </label> </b></a>
</div>
</div>
 <br> <br> <br> 
 </body>
 </html>

<?php 
   error_reporting(0);
      session_start();
       
       echo "<label style='color:white'>";

       $connection=mysqli_connect('localhost','root','flamigo','accidentsystem');

       $qry=mysqli_query($connection,"SELECT id,firstName,lastName, station FROM users where status='pending'AND station='firestation'");
       $no = mysqli_num_rows($qry);
       echo "<center><div id='displaypendingadmins'><h3> The number of pending is: $no</h3></div></center>";
       echo("<center><div id='displaypendingadmins'><ul>");
    
      while ($i=mysqli_fetch_array($qry)) {
      	$firstName=$i['firstName'];
      	$lastName=$i['lastName'];
      	$station=$i['station'];
      	$id = $i['id'];

      	echo "<br><li>$firstName  \t $lastName \t $station <br>
      	</li><br>  ";


      }
      echo "</ul></div></center>";
      echo "</label>";

 ?>