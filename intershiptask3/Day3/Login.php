<?php
      if (isset($_POST['Submit'])) {

       	    include 'conn.php';

       	    $Email = $_POST['Email'];

       	    $Password = $_POST['Password'];

       	    // we use the SELECT QUERY which match the $Email and $Password Form the Database

       	    $query= "SELECT * FROM `admin` WHERE d_email='$Email' And d_pass='$Password'";

       	     // We run the Query

       	    $exu = mysqli_query($conn,$query);

            $count = mysqli_num_rows($exu);

            if ($count>0) {
             	header('location:dashboard.php');
             } 

             else{
             	header('location:Login.php');
             }

             $conn -> close();
             echo "Connection Was Closed";
       } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<!-- Login page -->
	<h3> Login Form </h3>

         <form action="" method="POST">

         	  <label>UserEmail</label>
              <input type="email" name="Email">

         	  <label>Password</label>
         	  <input type="password" name="Password">

         	  <input type="submit" name="Submit">

         </form>
</body>
</html>
