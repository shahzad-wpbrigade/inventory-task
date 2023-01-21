<?php
if ( isset( $_POST['sub']) ) {

// Addtion Function
function Sum() {
 
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $sub  =  $_POST['sub'];

       if( $sub === '+' ) {

       if ( $num2 == '' ) {
          echo 'Number Two is Null';
        }

        else
        {
        $ans = $num1 + $num2 ;
         echo ($ans);
         
        } 
        }
}


// Substraction Function
function Subtraction() {
 
     $num1  = $_POST['num1'];
     $num2  = $_POST['num2'];
     $sub   =  $_POST['sub'];

   if ( $sub === '-' ) {

    if ($num2=='') {
      echo 'Number Two is Null';
    }
       else
       {
        $ans = $num1 - $num2 ;
        echo ($ans);
       }
    }
}

// Multipalication Function
function Multiplication() {
 
     $num1  = $_POST['num1'];
     $num2  = $_POST['num2'];
     $sub   = $_POST['sub'];

   if ( $sub === '*' ) {
       if ( $num2 == '' ) {
          echo 'Number Two is Null';
       }
        else
        {
         $ans = $num1 * $num2;
         echo($ans);
        } 
      }
}

 
// division Function 
function Division() {
 
    $num1  = $_POST['num1'];
     $num2 = $_POST['num2'];
     $sub  =  $_POST['sub'];

    if ( $sub === '/' ) {
       // User Enter the Number 2 and Number 2 is equal to the Zero than run the code.
      if ( $num2 == 0 ) {
      echo '<b>Divided By Zero is not Allowed Please Enter the number Greater than zero</b>'."<br>";
      }
        if ( $num2 == '' ) {
          echo 'Number two is null';
        }

        else
        {
       $ans = $num1 / $num2;
        echo($ans);  
        }

      }
}

// We calls the Function With Function Names
Sum();
Subtraction();
Multiplication();
Division();

}// isset function curly brace is end 


?>
<!DOCTYPE html>
<html>
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