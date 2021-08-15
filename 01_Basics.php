<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">
        this is my first php website
        <?php
define('PI', 3.14);
echo "Hello world and this is printed using php";


?>
      <?php

echo "Hello world my name is vikas giri";

$variable1 = 10;
$variable2 = 5;

echo $variable1;
echo $variable2;

echo $variable1 + $variable2;

// Arithmetic operator

echo "the value of variable1 + variable2";
echo "<br>";
echo $variable1 + $variable2;
echo "<br>";

echo "the value of variable1 - variable2";
echo "<br>";
echo $variable1 - $variable2;
echo "<br>";

echo "the value of variable1 * variable2";
echo "<br>";
echo $variable1 * $variable2;
echo "<br>";

echo "the value of variable1 / variable2";
echo "<br>";
echo $variable1 / $variable2;
echo "<br>";

echo "hello my name is vikas giri";

//Assigment Operator
$newVar = $variable1;
$newVar *= 2;
//$newVar += 1;
echo "<br>";

echo " the value of new variable is ";

echo $newVar;

//Comparasion Operator
echo "<br>";
echo "<h1> Comparasion Operator </h1>";
echo "<br>";
echo "the value of 1==5 is ";
echo var_dump(1==5);

echo "<br>";
echo "the value of 1!=5 is ";
echo var_dump(1!=5);
echo "<br>";
echo "the value of 1<=5 is ";
echo var_dump(1<=5);


echo "<br>";
echo "the value of 1>=5 is ";
echo var_dump(1>=5);
echo "<br>";


// Increment/Decrement Operator

echo $variable1++;
echo "<br>";
echo $variable1;
//echo $variable1--;

//echo ++$variable1;
//echo --$variable1;


// logical Operator

//end (&&)
//or (||)
//xor
//!

$myVar = ( True and True );

echo "<br>";
echo var_dump($myVar);

//Data Types in PHP

//1. integer
//2. string
//3. Float
//4. Boolean 
//5. Array
//6. object


echo "<br> Data Types <br>";
echo "<br>";
$var = "this is a string";
echo "<br>";
$var = var_dump($var);  

$var = 18;
echo "<br>";
echo var_dump($var);
echo "<br>";
echo PI;



?>

    </div>
</body>
</html>