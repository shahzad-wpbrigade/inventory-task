<!DOCTYPE html>
<html>
<head>
	<title> Day 1 Task </title>
</head>
<body>
        <?php
        echo("<h1> Arithmetic Operator </h1>");
             // we use the numbers for Addtion
             $Add_number1=2;
             $Add_number2=6;
             $sum=$Add_number1+$Add_number2;
             echo ($sum."<br>");
              // we use the Number for Division
             $Div_number1=5;
             $Div_number2=10;
             $Division=$Div_number1/$Div_number2;
             echo($Division."<br>");
             // we use the Number For Modulus
             $Modl_number1=2;
             $Modl_number2=4;
             // we perfom the operation and store the result in the Modulus variable
             $Modulus=$Modl_number1%$Modl_number2;
             echo ($Modulus."<br>");
              // we perform the Task of Exponentiation
              echo(exp(2) . "<br>"); 
            echo("<h2> Assignment Operators </h2>");
                // we perfom the Addion operation  through Assignment operator
                $Assign_number1=20;  
                 $Assign_umber2=20;
                 $Assign_number1+=$Assign_umber2;
                  echo ($Assign_number1."<br>");
                   // we perform the Multipalication through the Assignment operator
                  $multi_number1=2;
                  $multi_number2=3;
                  $multi_number1*=$Modl_number2;
                  echo($multi_number1."<br>");
                  // we perform the Modulus through the Assignment operator
                  $model_one=2;
                  $model_two=10;
                  $model_one%=$model_two;
                  echo($model_one."<br>");
                 echo("<h2> Comparison Operators </h2>");
                 // we use the Equal Operator
                 echo "<p> <b> we use the Equal Operator ==</b> </p>";
                  $equal_number1=2;
                  $equal_number2=2;
                  if($equal_number1==$equal_number2){
                  	echo("Number One is Equal to the Number Two $equal_number1==$equal_number2"."<br>");
                  }
                  else{
                  	echo "Number Two is not equal to the Number One"."<br>";
                  }

                   // we use the Lessthan and equal Operator use <=
                  echo "<p> <b>   We use LessthanEqualOperator <= </b> </p>";
                  $equal_number1=2;
                  $equal_number2=3;
                  if($equal_number1<=$equal_number2){
                  	echo "Number One is less than Number Two"."<br>".$equal_number1."<=".$equal_number2."<br>";
                  }
                  // we use the not Operator !
                    echo " <p> <b> we use the not Operator ! </b> </p> ";
                    $equal_number1=10;
                    $equal_number2=9;  
                    if($equal_number1 != $equal_number2) {
                                  
                      echo "Returns true if $equal_number1 is not equal to $equal_number2"."<br>";
                        
                    }                   
                     // we use the 	Not identical !==
                    echo " <p> <b> we use the Not identical !== </b> </p>";
                    $equal_number1=4;
                    $equal_number2=3;
                    if (	$equal_number1 !== $equal_number2) {
                    	echo "Returns true if $equal_number1 is not equal to $equal_number2,"."<br>";
                    }
                    
                    // we us use the Identical ===
                    echo "<p><b> We use theIdentical ===  </b></p>";
                     $equal_number1=2;
                     $equal_number2=2;
                     if (	$equal_number1 === $equal_number1) {
                     	echo "Returns true if $equal_number1 is equal to $equal_number2, and they are of the same type"."<br>";
                     }

                           // we use the   Increment / Decrement Operators ++
                    echo "<h2>   Increment / Decrement Operators </h2>";
                         
                           $increment_number=10;
                           $increment_number++;
                           echo "$increment_number" ."<br>";

                           echo " <h2> Logical Operators </h2>";
                                  //we use the And Operator

                                     $andoprat_one = 100;  
                                     $andoprat_two= 50;

                                 if ($andoprat_one == 10 AND $andoprat_two == 50) {
                                   echo "un And Operator <br>";
                                 }
                                 else{
                                 	echo "we can't use<br> ";
                                 }
                                 //end if else

                                 // we use the OR Operator
                                  $andoprat_one = 100;  
                                     $andoprat_two= 50;

                                 if ($andoprat_one == 10 OR $andoprat_two == 50) {
                                   echo "Hello world! <br> ";
                                 }
                                 else{
                                 	echo "we can't use <br> ";
                                 }
       


          
             

           



        ?>
</body>
</html>
