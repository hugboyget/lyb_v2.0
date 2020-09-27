<?php
include "public.php";
include "check.php";


$title = $_POST[title];
$content = $_POST[message];

check_keyword($title);
check_keyword($content);

session_start();
	$username = $_SESSION['username'];
	$sex = $_SESSION['sex'];

$sql="INSERT INTO message(username,sex,title,content) values ('$username','$sex','$title','$content')";
$re = mysql_query($sql);


mysql_select_db("newlyb_comment",$con);
$create_comment_table = "CREATE TABLE ".$title."_(id int auto_increment,user varchar(30),line_comment varchar(300),comment_time timestamp NULL DEFAULT CURRENT_TIMESTAMP,primary key(id))";
$rel = mysql_query($create_comment_table);

mysql_close($con);

if(!$re){
	die('<script>alert("Error:MayBe your Title words too long ! ");location.href="../index.php";</script>'.mysql_error());
}
else{
	echo $uname;
	echo"<script>alert('Post Success !');location.href='../index.php'</script>";
}


?>
