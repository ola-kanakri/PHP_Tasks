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

/*1.Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
Expected Output:  total as a number 
 */
$total =0;
 for ($i = 0 ; $i<30 ; $i++)
    {
        $total = $total +$i;
    }

   echo "Total = ".$total; 

?>


<br><br>
<!--4.Create a script to generate the following pattern, using the nested for loop
1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
-->
<?php

for ($i =1 ; $i<=5 ; $i++)
{
for ($j =1 ; $j<=5 ; $j++) 
    {
        if($i == $j)
            echo $i." ";
        else
            echo "0"." ";
    }
    echo "<br>";
}
?>

<!--5.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a 
number is the product of all integers up to and including that number. -->

</body>
</html>