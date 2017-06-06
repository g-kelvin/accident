<?php 
session_start();
session_destroy();
// sheader('location:login.php')
header('refresh:0;url=login.php')

 ?>