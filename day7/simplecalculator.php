<?php
if( isset( $_POST['sub'] )){

// Addtion Function
function Sum() {
 
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $sub  =  $_POST['sub'];

    if( $sub == '+' ) {
        $ans = $num1 + $num2;
         echo "<br>";
         echo($ans);
      } 
}

// Substraction Function
function Subtraction() {
 
     $num1  = $_POST['num1'];
     $num2  = $_POST['num2'];
     $sub   =  $_POST['sub'];
   if ( $sub == '-') {
        $ans = $num1 - $num2;
        echo($ans);
      } 
}

// Multipalication Function
function Multiplication() {
 
     $num1  = $_POST['num1'];
     $num2  = $_POST['num2'];
     $sub   = $_POST['sub'];

   if ( $sub == '*' ) {
         $ans = $num1 * $num2;
         echo($ans);
      } 
}


// division Function 
function Division() {
 
     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
     $sub  =  $_POST['sub'];

    if ( $sub == '/' ) {
        $ans = $num1 / $num2;
        echo($ans);
      } 
}

// We calls the Function With Function Names
Sum($ans);
Subtraction($ans);
Multiplication($ans);
Division($ans);

}// isset function curly brace is end 


?>
<!DOCTYPE html>
<html>
 <head>
  <title> Simple calculator </title>
  <head>
<body>

<form action="simplecalculator.php" method="post">
       <input type="number" name="num1"><br>

       <input type="number" name="num2"><br>
        
       <input type="submit" name="sub" value="+">
       <input type="submit" name="sub" value="-">
       <input type="submit" name="sub" value="*">
       <input type="submit" name="sub" value="/">
</form>



</body>
</html>
