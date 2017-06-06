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
      <a href="policehome.php" style="text-decoration:none; color:black;"><b><label style="color:white" >HOME</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>


        <a href="displayapproved.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVED-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

            
                <a href="report.php"style="text-decoration:none; color:black;"><b><label style="color:white" > REPORT </label></b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="approveaccident.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVE-ACCIDENTS </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

       <a href="deleteaccident.php"style="text-decoration:none; color:black;"> <b><label style="color:white" >DELETE-ACCIDENT </label> </b></a>
</div>
</div>
 
 </body>
 </html>


<?php 
   error_reporting(0);
      session_start();
       
  echo "<label style='color:white'>";


       $connection=mysqli_connect('localhost','root','flamigo','accidentsystem');

       $qry=mysqli_query($connection,"SELECT id,firstName,lastName, station FROM users where status='pending' AND  station='police'");
       $no = mysqli_num_rows($qry);
       echo "<br><br><br><center><div id='displaypendingadmins'><h3> The number of pending id $no</h3></div></center>";
       echo("<center><div id='displaypendingadmins'><ul>");
    
      while ($i=mysqli_fetch_array($qry)) {
      	$firstName=$i['firstName'];
      	$lastName=$i['lastName'];
      	$station=$i['station'];
      	$id = $i['id'];

      	echo "<br><li>$firstName  \t $lastName \t $station <br>
         <a href='deleteadmin.php?id=$id'><button><b>delete<b></button></a>
      	</li><br>  ";
        
      }
      echo "</ul></div></center>";
echo "</label>";
 ?>