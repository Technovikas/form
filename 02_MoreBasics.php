<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;

    }
.container{
max-width: 80%;
background-color: pink;
margin: auto;
padding: 23px;

}    
</style>
<body>
    <div class="container">
        <h1> Lets learn about php </h1>
    <p>Your party status is here:<p>
    <?php

   $age = 17;
   if($age>18){
       echo "you can go to the party";
   }
else{
echo "you can not go to the party";

}
// Arrays in php
echo "<br>";
$language = array("Vikas", "Prince", "Manish");
echo $language[0];

// Loops in php

$a = 0;
while ($a <= 10) {
    echo "<br>the value of a is: ";
    echo $a;
    $a++;

}
    // Itrating arrays in php using while loop 
    
    $a = 0;
while ($a < count($language)) {
    echo "<br>the value of language is: ";
    echo $language[$a];
    $a++;

}
// For Loop 


for ($a=0; $a < 10; $a++) { 
    echo "<br> the value of a is: "; 

echo $a;
}
foreach ($language as $value) {
    echo "<br> the value from  foreach loop is ";
    echo $value;


}

function print5(){
echo "<br>";
echo "five";

}

print5();


?>
    </div>
        
</body>
</html>