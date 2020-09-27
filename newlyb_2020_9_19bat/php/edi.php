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
check_equal($user,$_SESSION['username']);

$title = $_POST['title'];
$content = $_POST['message'];
check_keyword($title);
check_keyword($content);
$edi = mysql_query("UPDATE message SET title='$title',content='$content' WHERE post_time = '$time'  ");

mysql_close($con);
echo "<script> alert('Update Success !');location.href='../home.php'; </script>";


?>