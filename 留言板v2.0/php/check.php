<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

function check_keyword($string){

	$pattern="/select|union|order|<|>|%|'|xss|=|\|alert|script|or|and|&&/i";
if(preg_match($pattern,$string))
{echo"<script>alert('Warming: Stop your hacking ! ');location.href='../register.html'</script>";
die("repeat");
}

}

function check_repeat($username){

$result = mysql_query("SELECT id FROM users WHERE username='$username'");
mysql_close($con);
$row = mysql_fetch_array($result);
$ID=$row['id'];
if($ID)
{
echo "<script>alert('Register false: The Username already exist !');location.href='../register.html'</script>";
die("repeat");
}


}


function check_equal($string1,$string2){
	if($string1 === $string2)
	{
		/*确认是否操作删除、编辑*/
	}
	else{
		echo "<script>alert('This message Ahthor is [$string1]. You have no permission to operate this message !');location.href='../home.php'; </script>";
		exit();
	}
}

function check_equal_not($string1,$string2){
	if($string1 === $string2)
	{
		echo "<script>alert('Sorry, You can not love yourself !');location.href='../index.php'; </script>";
		exit();
	}
	
}
?>
