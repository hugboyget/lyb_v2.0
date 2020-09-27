<?php
$time =base64_decode($_GET['id']);
include "public.php";
include "session.php";
include "check.php";
session_start();
check_session_del();
check_keyword($time);

$result = mysql_query("SELECT username FROM message WHERE post_time = '$time' ");
$row = mysql_fetch_array($result);
$user = $row['username'];
if(!$user){
	echo "<script> alert('This message does not exist !');location.href='../home.php';</script>";exit();	
}
check_equal($user,$_SESSION['username']);
$del = mysql_query("DELETE FROM message WHERE post_time = '$time' ");

echo "<script> alert('Delete Success !');location.href='../home.php'; </script>";

mysql_close($con);



?>
