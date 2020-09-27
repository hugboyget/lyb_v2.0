<?php
include"public.php";




function record_ip(){
	$ip=$_SERVER["REMOTE_ADDR"];
session_start();
	$username = $_SESSION['username'];

if(!$username){
	$username = '未登录';
}

$sql="INSERT INTO log(username,ip) values ('$username','$ip')";
$re = mysql_query($sql);

$result = mysql_query("SELECT id FROM all_ip WHERE ip='$ip'");
$row = mysql_fetch_array($result);
$ID=$row['id'];

if($ID===NULL){


$in = "INSERT INTO all_ip(username,ip) values ('$username','$ip')";
$rel = mysql_query($in);

}

mysql_close($con);

}

function logout_status(){
	$ip=$_SERVER["REMOTE_ADDR"];
session_start();
	$username = $_SESSION['username'];

date_default_timezone_set(PRC);
$time = date("Y-m-d H:i:s");

$logout1 = mysql_query("UPDATE log SET logout_time='$time' WHERE username = '$username' or ip='$ip'  ");
$logout2 = mysql_query("UPDATE all_ip SET username='$username',logout_time='$time',status='掉线!' WHERE  ip='$ip'  ");


}

?>