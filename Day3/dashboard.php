<?php

session_start();
include_once 'conn.php';

$profile = $_SESSION['useremail'];

//check the session is Create or Not
if ( $profile == true ) {
	header('location:dash.php');
}
else{
	header('location:Login.php');
}
// Show the Username And Useremail

echo "Welcome".$_SESSION['username'] ."<br>";

echo "Welcome".$_SESSION['useremail'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body> 
	<h1> Welcome to the Admin Page</h1>
         <form>
	     <a href="Logout.php"><input type="submit" name="Logout" value="Logout"></a>
	 </form>
</body>
</html>
