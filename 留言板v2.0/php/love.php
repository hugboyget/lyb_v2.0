<?php

$time =base64_decode($_GET['id']);
include "public.php";
include "session.php";
include "check.php";
session_start();
check_session_del();
check_keyword($time);

$result = mysql_query("SELECT username,love FROM message WHERE post_time = '$time' ");
$row = mysql_fetch_array($result);
$user = $row['username'];
$love = $row['love'] + 1;
if(!$user){
	echo "<script> alert('This message does not exist !');location.href='../index.php';</script>";exit();	
}
check_equal_not($user,$_SESSION['username']);
$del = mysql_query("UPDATE message SET love = '$love'  WHERE post_time = '$time' ");

echo "<script> alert('Love Success, Thank you !');location.href='../index.php'; </script>";

mysql_close($con);



?>

