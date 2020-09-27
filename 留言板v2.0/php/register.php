<?php
include "public.php";
$uname=$_POST[username];
$pword=$_POST[password];
$sex=$_POST[sex];
$adress=$_POST[adress];
$email=$_POST[email];

include "check.php";
check_keyword($uname);
check_keyword($pword);
check_keyword($sex);
check_keyword($adress);
check_keyword($email);

check_repeat($uname);


$sql="INSERT INTO users(username,password,sex,adress,email) values ('$uname','$pword','$sex','$adress','$email')";
$re = mysql_query($sql);
mysql_close($con);
if(!$re){
	die('Error:'.mysql_error());
}
else{
	echo $uname;
	echo"<script>alert('Register success, now to Login ! $_POST[username]');location.href='../login.html'</script>";
}
?>
