<?php
   session_start();
   if(isset($_SESSION['userName'])){
       session_destroy();
       header('location: homepage.php');
   }
   else{
	   echo "Please log in first. ";  
	   echo "<a href='login.php'>Log in</a>"; 
 
   }
?>
