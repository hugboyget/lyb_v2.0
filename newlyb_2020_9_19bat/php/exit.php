<?php
session_start();
	unset($_SESSION['username']);

echo "<script>alert('Log Out success !');location.href='../index.html'</script>";


?>