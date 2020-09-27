<?php
include"ip.php";
logout_status();
session_start();
	unset($_SESSION['username']);

echo "<script>alert('Log Out success !');location.href='../index.php'</script>";


?>
