<?php
$insert = false;
if(isset($_POST['name'])){
  
$Server = "localhost";
$username = "root";
$password = "";
   
$con = mysqli_connect($Server, $username, $password);

if(!$con){

    die("connect to this database failed due to" . 
      mysqli_connect_error());
}
  //echo "success connecting to the db";

   $name= $_POST['name'];
   $gender= $_POST['gender'];
   $age= $_POST['age'];
   $email= $_POST['email'];
   $phone= $_POST['phone'];
   $desc= $_POST['desc'];

   $sql = "INSERT INTO `Google_Form`.`Google_Form` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
   VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', CURRENT_TIMESTAMP);";

    //echo $sql;
    if($con->query($sql) == true){

    //echo "successfully inserted";
    $insert = true;  

    }

    else{

        echo "ERROR: $sql <br> $con->error";

    } 

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Vikas Tech World Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="style.css">   o
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Vikas Tech World">
    <div id="head" class="container">

        <h3 id="newh3">Welcome To Vikas Tech World Web Page</h3>
        <p id="newh3">Enter Your Details and Whatever Information You Give Me 
           Related To My Youtube Channel</p>
           <?php
           if($insert == true){
          echo "<p class='submitMsg'> Thank You For Submiting This Form</p>";
           }
          ?>
    <form action="index.php" method="post">
     <input type="text" name="name" id="name" placeholder="Enter Your Name">
     
     <input type="text" name="age" id="age" placeholder="Enter Your Age">

     <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
     
     <input type="email" name="email" id="email" placeholder="Enter Your email">

     <input type="phone" name="phone" id="phone" placeholder="Enter Your phone">

      <textarea name="desc" id="desc" cols="30" rows="10" 
      placeholder="Enter any other information"></textarea>
 
     <button class="btn">Submit</button>  
    

    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>