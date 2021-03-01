<?php
session_start();
if(isset($_SESSION['email'])) {
    echo "<h1>My Profile</h1>";
    echo "Hello ".$_SESSION['uname'];
    echo "<br>Welcome to our webpage.<br>";
    echo "Email : ".$_SESSION['email']."<br>";
    echo "First Name: ".$_SESSION['fname']."<br><br>";
    echo "Last Name: ".$_SESSION['lname']."<br>";
   
}  
?>   
<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
     </head>
  <body>
  	<a href='logout.php'>Logout</a>";
  </body>      