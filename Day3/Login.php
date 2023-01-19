<?php
     //  We start the Session
   session_start();
   
     //  We use the isset Function which the check the data is fill in the Form

   if (isset($_POST['Submit'])) {

    // Database Connection File and use the Include_once keyword and conn.php is the connection file
    include_once 'conn.php';

       $username  = $_POST['username'];
      $useremail  = $_POST['useremail'];

       // This is the Select query where we select the data form database 
       $query= "SELECT * FROM `run` WHERE d_username='$username' AND   d_useremail='$userEmail' ";
       
       // we RUN THE QUERY THROUGH THE mysqli_query
       $exu = mysqli_query($con,$query);
       
       $count = mysqli_num_rows($exu);
       
       if ( $count == 1 ){
            //We create the Session variable and values
           $_SESSION['username']  = $username;
           $_SESSION['useremail'] = $useremail;
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
   
    <form action="Login.php" method="POST">
         Username<input type="text"   name="username"><br><br>
         UserEmail<input type="email" name="useremail"><br><br>
                  <input type="submit" name="Submit">
    </form>
</body>
</html>
                       
