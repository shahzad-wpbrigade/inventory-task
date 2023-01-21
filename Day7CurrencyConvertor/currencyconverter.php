<?php
if( isset($_POST['submit']) ){

  // Australian to other country currency converter

  function Australian_to_Japanese()
  {
    
       $amount = $_POST['amount'];
       $from   = $_POST['from'];
       $to     = $_POST['to'];

          if( $from == "AUD" AND $to == "JPY" ) {
          echo " <b>Your Converted Amount is:</b><br> ";
          echo   $amount * 90.25;
        }

    }
//We Start function
    function Australian_to_PKR()
  {
    
        $amount = $_POST['amount'];
        $from   = $_POST['from'];
        $to     = $_POST['to'];

          if( $from == "AUD" AND $to == "PKR" ) {
          echo "<b>Your Converted Amount is:</b><br>";
          echo   $amount * 160.85;
        }

    }
 // Close the Function
// start function
    function Australian_to_Philippine()
  {
    
        $amount = $_POST['amount'];
        $from   = $_POST['from'];
        $to     = $_POST['to'];

           if ( $from == "AUD" AND $to == "PHP" ) {
          echo "<b>Your Converted Amount is:</b><br>";
          echo   $amount  * 37.92;
        }

    }
 // Close the Function

//US TO other country currency converter

//start function
    function US_to_Japanese()
  {
    
        $amount = $_POST['amount'];
        $from   = $_POST['from'];
        $to     = $_POST['to'];

           if ( $from =="USD" AND $to == "JPY" ) {
           echo "<b>Your Converted Amount is:</b><br>";
           echo   $amount * 129.56;
        }

    }
 // Close the Function

//star thr function
    function US_to_Pakistan()
  {
    
    $amount = $_POST['amount'];
    $from   = $_POST['from'];
    $to     = $_POST['to'];

          if( $from == "USD" AND $to == "PKR" ) {
          echo "<b>Your Converted Amount is:</b><br>";
          echo   $amount * 229.85;
        }

    }
 // Close the Function

//we start function
     function US_to_Philippine()
  {
    
    $amount = $_POST['amount'];
    $from   = $_POST['from'];
    $to     = $_POST['to'];

     if( $from == "USD" AND $to == "PHP"){
     echo "<b>Your Converted Amount is:</b><br>";
     echo   $amount * 54.46;
          }

    }
// Close the Function

//Call the Functions
Australian_to_Japanese();
Australian_to_PKR();
Australian_to_Philippine();

US_to_Japanese();
US_to_Pakistan();
US_to_Philippine();

}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Currency Converter</title>
</head>
<body>

<form action="currencyconverter.php" method="post">

<h2>Currency Converter</h2>
<table>
  <tr>
  <td>
    Enter Amount:<input type="text" name="amount"><br>
  </td>
</tr>
<tr>
<td>
  <br><label>From:</label>
  <select name='from'>
   <option value="AUD">Australian Dollar(AUD)</option>
   <option value="USD" selected>US Dollar(USD)</option>
   </select>
</td>
</tr>

<tr>
  <td>
  <br><label>To:</label>
  <select name='to'>
   <option value="PKR" selected >Pakistan Rupee(PKR)</option>
   <option value="JPY">Japanese Yen(JPY)</option>
   <option value="PHP">Philippine Peso(PHP)</option>
  </select>
</td>
</tr>

<tr>
<td><br>
<input type='submit' name='submit' value="CovertNow">
</td>
</tr>
</table>
</form>

</body>
</html>