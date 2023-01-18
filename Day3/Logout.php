<?php

     session_start();

     // we Destory the Session

     session_unset();
     
     header('location:Login.php');

?>