<?php

$server = "localhost";
$usename = "root";
$password = "";

$con = mysqli_connect($server, $usename, $password);

/*if(!$con)
{
    die("connection is failed due to some error!");
}
echo "connection  is success!";*/

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sql = "INSERT INTO `test`.`hotel` ( `name`, `age`, `gender`, `phone`, `email`) VALUES ( '$name', '$age', '$gender', '$phone', '$email');"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS Practical exam </title>
</head>
<body>
 <h2>welcome to hotel management system</h2>
 <p>Enter your details</p>

 <form action="conn.php" method="post">
     <input type="text" name="name" id="name" placeholder="Enter your name">
     <input type="text" name="age" id="age" placeholder="Enter your age">
     <input type="text" name="gender" id="gender" placeholder="Enter your gender">
     <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
     <input type="email" name="email" id="email" placeholder="Enter your email id">
     <button class="btn" >Submit</button>
 </form>
 <form action = "search.php" method = "post">
 <input type="text" name="id" id="id" placeholder="Enter the id to search">
 <button class= "btn" > search </button>
</form>
</body>
</html>