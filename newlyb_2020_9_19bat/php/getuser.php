<?php
include "public.php";

session_start();

$username =$_SESSION['username'];
$result = mysql_query("SELECT id,username,password,sex,adress,email,register_time FROM users WHERE username='$username'");
mysql_close($con);
$row = mysql_fetch_array($result);

$password = "***".$row['password']."***";
$sex = $row['sex'];
$adress = $row['adress'];
$email = $row['email'];
$register_time = $row['register_time'];
$id = $row['id'];


?>