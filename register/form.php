<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel="stylesheet" type="text/css" href="../home/index.css">
</head>
<body >
<div id="links">
<div id="maintittle" style="color:white">
<h4>ACCIDENT REPORTING SYSTEM</h4>
</div>

  <div id="pos">
         <a href="../home/index.php"style="text-decoration:none; color:black;"><b><label style="color:white">HOME</label> </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

        <a href="../register/login.php"style="text-decoration:none; color:black;"><b><label style="color:white">LOG IN </label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

           <a href="../home/about.html"style="text-decoration:none; color:black;"><b><label style="color:white">ABOUT US</label> </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a>

       <a href="../users/users.php"style="text-decoration:none; color:black;"> <b><label style="color:white">POST ACCIDENT </label></b></a>
</div>
</div>
<br><br><br><br><br><br>
<center>
<div id="formbackground">
      <br><br><br>

 <!-- this is the form police and doctors uses to register into the system -->
Enter the following information.
<form action="signin.php" name="" method="post">

  <br><br>
      <input name="firstName" type="text" placeholder='First Name:' autofocus required>
    
        <input name="lastName" type="text" placeholder='Last Name:'>
      <br><br>  
<label style="color:white">Gender</label>

	    <input name="gender" type="radio" value="Male">Male
	    <input name="gender" type="radio" value="Female">Female
<br><br>
      
          <input name="station" type="text" placeholder='Station:'>

    
        <input name="email" type="email" placeholder='Email:'>
        <br><br>
        
          <input name="password" type="password" placeholder='Password:'>
        
		<br><br>
        <button name="button" type="submit" value="submit">JOIN</button>   
           <br><br>
</form>

</div>
</center>
</body>
</html>