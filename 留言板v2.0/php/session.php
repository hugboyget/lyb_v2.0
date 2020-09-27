<?php
function set_session($string1,$string2){
	session_start();
	$_SESSION['username']=$string1;
	$_SESSION['sex']=$string2;


}
function check_session(){
	session_start();
	if(!isset($_SESSION['username'])){
		echo"<script>alert('You are not logged in or your login has expired. Please log in ! ');location.href='login.html'</script>";
		die('未登录！');
	}

}


function check_session_del(){
	        session_start();
		        if(!isset($_SESSION['username'])){
				                echo"<script>alert('You are not logged in or your login has expired. Please log in ! ');location.href='../login.html'</script>";
						                die('未登录！');
						        }
}



?>
