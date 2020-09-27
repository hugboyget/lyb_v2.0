
<?php
include "public.php";
include "check.php";
include "session.php";

$value1=$_POST[username];
$value2=$_POST[password];

check_keyword($value1);
check_keyword($value2);


$result = mysql_query("SELECT id,sex FROM users WHERE username='$value1' and password='$value2'");
mysql_close($con);
$row = mysql_fetch_array($result);
$ID=$row['id'];
$sex=$row['sex'];
if($ID!=NULL)
{
set_session($value1,$sex);
/*setcookie("username",$value1,time()+10);*/
echo "<script>location.href='../index.php'</script>";
}
else
{
echo "<script>alert('Login error: UserName or PassWord is Wrong !');location.href='../login.html'</script>";
}
?>
