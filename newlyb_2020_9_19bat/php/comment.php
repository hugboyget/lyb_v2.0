<?php
include "public.php";
include "check.php";
include "session.php";

session_start();
	$user = $_SESSION['username'];

$title = base64_decode($_GET['id']);
$comment = $_POST['message'];

check_keyword($comment);

session_start();
	$user = $_SESSION['username'];

mysql_select_db("newlyb_comment",$con);
$sql="INSERT INTO $title"."_(user,line_comment) values ('$user','$comment')";
$re = mysql_query($sql);

if(!$re){
	die('ERROR:'.mysql_error());
}
else{
	echo"<script>alert('Comment Success !');location.href='../home.php'</script>";
}


?>