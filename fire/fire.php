
<!DOCTYPE html>
<html>
<head>
  <title>FIREFIGHTER REPORT</title>
  <link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body>
<div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div> 
  
  <div id="pos">
  <br>
      <a href="displaypending.php" style="text-decoration:none; color:black;"><b><label style="color:white" >PENDING-ADMINS</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="displayapproved.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVED-ADMIN</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
            
                <a href="report.php"style="text-decoration:none; color:black;"><b><label style="color:white" > REPORT </label></b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="approveaccident.php"style="text-decoration:none; color:black;"><b><label style="color:white" >APPROVE-ACCIDENTS </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

       <a href="deleteaccident.php"style="text-decoration:none; color:black;"> <b><label style="color:white" >DELETE-ACCIDENT </label> </b></a>
</div>
</div>
<br><br><br><br><br>
<div id="reportback" style="color:white">
<center>
<br>
<form name="" action="" method="post">
<H2>DOCTOR REPORT OF HOW THE ACCIDENT WAS:</H2>
<br>
<textarea name="fireReport"rows="6"></textarea>
<button name="submit" type="submit" value="submit"><b> DOCTOR REPORT</b></button>
   <br><br><br>
  
   <br><br>
</form>
  
</center>
</body>
</div>
</html>
 <?php 
 error_reporting(0);
 session_start();
 if (isset($_POST['submit']))
 {
  $fireReport=$_POST['fireReport'];
 $fireID= $_SESSION['id'];
 $accidentID=$_GET['id'];
 echo "<label style='color:white'>";
  $connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
   //insert fire fighter report into the database.
    $qry=mysqli_query($connection,"INSERT INTO firereport (fireReport,fireID,accidentID) VALUES('$fireReport', '1','$accidentID')");
   if ($qry) {
   echo "successfullly reoported";
   }
   else
   {
    echo "the report is not valid";
   }
   echo "</label>";
 }
 
  ?>
