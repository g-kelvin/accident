
<!DOCTYPE html>
<html>
<head>
    <title>UPLOAD</title>
    <link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body>
<div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div>
    
    <div id="pos">

    <a href="../home/index.php" style="text-decoration:none; color:black;"><b><label style="color:white">HOME</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a> 

      <a href="../register/form.php" style="text-decoration:none; color:black;"><b><label style="color:white">REGISTER</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="../register/login.php"style="text-decoration:none; color:black;"><b><label style="color:white">LOG IN </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="../home/about.html"style="text-decoration:none; color:black;"><b><label style="color:white">ABOUT US</label> </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

</div>
</div>
<br><br>

<center>
<div id="userspost" style="color:white">
<br><br><br>
<center>UPLOAD  PICTURE OF AN ACCIDENT</center>

<br>
NOTE: Remember to discribe the accident and also state the location of where the accident occured.
<br><br>
<form action="" name="" method="post" enctype="multipart/form-data">
<select name="accidenttype" required onchange="fetchSubcategory(this.value)">
  <option value="">-select-</option>option>
     <option value="1">road</option>
     <option value="2">domestic</option>
    
</select>
<span id="subcategory"></span>
<input type="file" name="picture" accept="image/*" />
<!-- this is the space to allow one describe the accident posted. -->
<textarea  name="description" rows="6"></textarea>
<br><br><br>
    <button name="button" type="submit" value="submit"><B>POST</B></button>
    </form>
      <br><br><br>
</div>
</center>
<script type="text/javascript">
    function fetchSubcategory(category) {
        var request = new XMLHttpRequest();
        request.open("GET", "fetchSubcategory.php?categoryId="+category, true);
        request.send();
        request.onreadystatechange = function() {
            document.getElementById("subcategory").innerHTML = request.responseText;
        }
    }
</script>
</body>

</html>



<?php 
 error_reporting(0);

     //connect to the database
 if(isset($_POST['button'])) {
    $connection=mysqli_connect('localhost','root','flamigo','accidentsystem');
    $description=$_POST['description'];
    $time=time();
    $picture = $_FILES['picture'];
    $tmp_name = $picture['tmp_name'];
    $imagename = $picture['name'];

    if(move_uploaded_file($tmp_name, "../photos/".$imagename))
    {
        echo "sucess";
    }
    else
    {
        echo "fail";
    }
    
   //insert into the database
    $qry=mysqli_query($connection,"INSERT INTO `accident` (`id`, `picture`, `description`, `time`, `policeConfirm`, `hospitalConfirm`, `fireConfirm`, `status`) VALUES (NULL, '$imagename', '$description', '$time', 'no', 'no', 'no', 'pending');");
     if ($qry) {
     	echo "the post was successfully uploaded";
     } 
     else
     {
        echo "error occured";
     }
 }

 ?>
 
