<?php

$server = "localhost";
$usename = "root";
$password = "";

$con = mysqli_connect($server, $usename, $password);
$id = $_POST['id'];
$sql = "SELECT * FROM `test`.`hotel` WHERE `id` = $id";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
    echo "name= ".$row["name"]. " age = ".$row["age"]. " gender = ".$row["gender"]." email = ".$row["email"];
}
?>