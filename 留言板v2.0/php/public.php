<?php
$con = mysql_connect("IP:3306","username","password");
if(!$con)
{
	die('Could not connect Mysql:'. mysql_error());
}
mysql_select_db("newlyb",$con);

?>