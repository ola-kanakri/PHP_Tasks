<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    // Logical Statements and Operators           		          
    // 1.	Write a PHP script to see if the specified year is a leap year or not.

    //test 2000 2012 Leap years
    function LeapYear_check($year){
        if ($year % 400 == 0)
           print("It is a leap year");
        else if ($year % 100 == 0)
           print("It is not a leap year");
        else if ($year % 4 == 0)
           print("It is a leap year");
        else
           print("It is not a leap year");
     }
     $year = 2024;
     LeapYear_check($year);
     ?>


    


     <br><br>
     <?php
    // 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20,
    // we are in winter otherwise the season is summer.
    
     $temp = 50;
    if ($temp<20)
      echo "We are in Winter";
    else
      echo"We are in Summer";
      ?>  


   <br><br>
   <?php  
    // 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same,
    // then calculate the triple of their sum.

    $num1= 2 ; $num2=2;
    $sum = $num1 + $num2;

    if ($num1 == $num2)
    {
     echo "Triple= ";
     echo $sum*3;
    }

    else 
    {
       echo "Sum= ";
       echo $sum;
    }
    ?>
    

    <br><br>
    <?php
    // 4.	Write PHP to check if the sum of the two given numbers equals 30, 
    //if the condition is true the return their sum otherwise return false
    $num1= 10 ; $num2=10;
    $sum = $num1 + $num2;

    if ($sum == 30)
    {
     echo "Sum = ";
     echo $sum;
    }

    else 
    {
      echo var_dump(false);
    }
    ?>


    <br><br>
    <?php
    // 5.	Write in PHP script to check if the given positive number is a multiple of 3.
    $num = 20;

    if ($num>0 && $num%3 == 0)
    {
       echo $num." is a multiple of 3."; 
       
    }
    else 
    {
      echo var_dump(false);
    }


    ?>
    
    <br><br>
    <?php
    // 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
    // Sample Input: number = 50
    // Sample Output: ‘true’

    $input=50;

    if($input>=20 && $input>=50)
      echo var_dump(true);
    else
    echo var_dump(false);


    ?>


<br><br>
    <?php
    // 7.	Write PHP script to find the largest number between the three integers
    // Sample Input: [ 1, 5, 9 ]
    // Sample Output: 9
    $num1=1;
    $num2=5;
    $num3=9;

    if ($num1>$num2 && $num1>$num3)
      echo "The largest number is ". $num1;
   
   else if ($num2>$num1 && $num2>$num3)
      echo "The largest number is ". $num2;

   else
      echo "The largest number is ". $num3;
    ?>
    

    <br><br>
    <?php
    // 8.	Write PHP script to calculate the monthly electricity bill according to these rules
     
    // a.	For first 50 units – 2.50 JOD/Unit
    // b.	For next 100 units – 5.00 JOD/Unit
    // c.	For next 100 units – 6.20 JOD/Unit
    // d.	For units above 250 – 7.50 JOD/Unit

    $units = 50;
    $bill=0;

    while ($units > 0)
    
    {
         $bill = 2.5;
         $units= $units -50;
 

         $bill =$bill+ 5;
         $units= $units -100;
   
         $bill =$bill+ 6.20;
         $units= $units -100;
         

         $bill =$bill+ ($units/250)*7.5;
         break;
     
   }
   
   echo "<br>"."Your bill= ". $bill;
    
    ?>



    <br><br>
    <?php
    // 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
    
    // Sample Input: 15
    // Sample Output: ‘is no eligible to vote’
    $age =15;
    if ($age>=18)
      echo "You are eligible to vote.";

   else
   echo "You are not eligible to vote.";
   
    ?>


<br><br>
    <?php
    // 10.	Write php script  to check whether a number is positive, negative or zero
    
    // Sample Input: -60
    // Sample Output: ‘Negative’

   $number = -60;
   if($number > 0)
   echo $number. " is Positive";
   else if ($number <0)
   echo $number. " is negative";
   else 
   echo $number. " is Zero";
    ?>



<br><br>
    <?php
    // 11.	Write php script to make a calculator, the calculator should contain the four main operations 
    
    // e.	Addition
    // f.	Subtraction
    // g.	Multiplication
    // h.	Division
    $num1 = 20 ;
    $num2 = 4;

    $operation = '*';

      if($operation == '+')
      echo $num1+$num2;
   
      if($operation == '-')
      echo $num1-$num2;

      if($operation == '*')
      echo $num1*$num2;

      if($operation == '/')
      echo $num1/$num2;


    ?>



<br><br>
    <?php
    // 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
    
    // Sample Inputs: [60,86,95,63,55,74,79,62,50]
    // Sample Output: ‘D’
    
    // Range	Grade
    // <60	F
    // <70	D
    // <80	C
    // <90	B
    // <100	A

    $Grades = array(60,86,95,63,55,74,79,62,50);
    $arrlength = count($Grades);
    $sum =0;
    $avg =0;

    for($i = 0; $i < $arrlength; $i++)
      $sum = $sum + $Grades[$i];

      $avg = $sum / $arrlength;

      if ($avg < 60)
         echo "F";

      else if ($avg < 70)
         echo "D";

      else if ($avg < 80)
         echo "C";

      else if ($avg < 90)
         echo "B";

      else if ($avg < 100)
         echo "A";
         

    ?>
        
    
    



    
</body>
</html>