<?php

session_start();

include 'conn.php';

$profile = $_SESSION['UserEmail'];

//check the session is Create or Not

if ($profile == true) {
	
}
else{
	header('location:Login.php');
}

// Show the Username And Useremail

echo "Welcome".$_SESSION['Username'] ."<br>";

echo "Welcome".$_SESSION['UserEmail'];

?>






<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body> 

	<h1> Welcome to the Admin Page</h1>
         <form>


	     <a href="Logout.php">
	         <input type="submit" name="Logout" value="Logout">
         </a>

         <!-- We Close the Form Tag -->
	      </form>
</body>
</html>