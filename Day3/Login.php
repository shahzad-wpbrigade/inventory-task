<?php

     //  We start the Session

   session_start();
   
     //  We use the isset Function which the check the data is fill in the Form

   if (isset($_POST['Submit'])) {

    // Database Connection File

    include'conn.php';

       $Username = $_POST['Username'];
       $UserEmail = $_POST['UserEmail'];

       // This is the Select query where we select the data form database 

       $query= "SELECT * FROM `run` WHERE d_username='$Username' AND   d_useremail='$UserEmail' ";

       // we RUN THE QUERY THROUGH THE mysqli_query

       $exu=mysqli_query($con,$query);

       $count=mysqli_num_rows($exu);

       if ($count == 1 ){

            //We create the Session variable and values

           $_SESSION['Username'] = $Username;

           $_SESSION['UserEmail'] = $UserEmail;

           header('location:dash.php');
       }

       else
       {
          echo "Login Faild";
       }
       
   }
?>







<!DOCTYPE html>
<html>
<head>
    <title> Login Form</title>
</head>
<body>

   <h1> Login Form </h1>

    <form action="" method="POST">

         Username<input type="text" name="Username"><br><br>

         UserEmail<input type="email" name="UserEmail"><br><br>

         <input type="submit" name="Submit">

    </form>

</body>
</html>
                       