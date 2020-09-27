<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>留言板 | Home</title>
	 <link rel="stylesheet" href="css/home.css">
</head>
<body>

<div class="header">
  <h1>Welcome to the world of message boards !</h1>
  <p>深窥自己的心,而后发觉一切的奇迹在你自己。 ——培根 </p>
</div>

<div class="topnav">
  <a href="login.html"> Login </a>
  <a href="register.html"> Register </a>
  <a href="php/exit.php"> Logout </a>
  <a href="hack.html" target="_bank">>Posture<</a>
  
  <?php session_start();
  if(!$_SESSION['username']){$name='游客';}else{$name= $_SESSION['username'];}
  echo"<a href='http://www.heihei.work:8080/'target='".$name.  "''>>WaTalk<</a>";
  ?>

  <a href="http://download.dogwood.com.cn/online/4jchlx/index.html" target="_bank"> |四级单词| </a>
  
<?php session_start();

  if($_SESSION['username'] ==='贾建飞'){
   echo"<a href='log.php' target='_bank'>>Log<</a>";   
  }

  ?>
  
  <a href="userhome.php"  style="float:right"><img src="css/jpg/icon_me.png"  style="width: 1.2rem;
  height: 1.2rem;"/><?php session_start(); if(!$_SESSION['username']){echo"游客";}else{echo $_SESSION['username'];} ?></a>
</div>


<div class="row">
<div class="leftcolumn">


<?php
include"php/ip.php";
record_ip();
include"php/public.php";
$data = mysql_query("SELECT * FROM message order by id desc");
mysql_select_db("newlyb_comment",$con);
while($row= mysql_fetch_array($data))
{

echo "<div class='card'>
<p><b>Title:</b>".$row['title']."</p>     
      <p><b>Post time:</b>&nbsp".$row['post_time']."</p>    
      <p><b>Author:</b>&nbsp".$row['username']."&nbsp&nbsp&nbsp&nbsp<b>Sex:&nbsp</b>".$row['sex']."&nbsp&nbsp&nbsp&nbsp<b>Love:&nbsp</b>".$row['love']."</p>
      <p><b>Message:</b><br/><br/>&nbsp&nbsp<h2>".$row['content']."</h2></p>"."<hr/><p><b>COMMENT:</b></p>";

$title = $row['title'];
$sql = "SELECT * FROM $title"."_";$datac = mysql_query($sql);
if($datac){

while($rowc=mysql_fetch_array($datac))
      {
        echo "
        <p>".$rowc['comment_time']."</p>
        <p>".$rowc['user']." : ".$rowc['line_comment']."</p>
        ";
      }
  
}


$time =base64_encode($row['post_time']);
$title=base64_encode($row['title']);
echo '
<a href="php/delete.php?id='.$time.'">
<img src="css/jpg/icon_delete.png"  style="right: 1rem;width: 2rem; height: 2rem;"/>
</a>

<a href="edi.php?id='.$time.'">
<img src="css/jpg/icon_edi.png" style="left: 6rem;width: 2rem; height: 2rem;"/>
</a>

<a href="http://www.heihei.work/comment.php?id='.$title.'">
<img src="css/jpg/icon_comment.png" style="left: 11rem;width: 2rem; height: 2rem;"/>
</a>

<a href="php/love.php?id='.$time.'">
<img src="css/jpg/icon_love.png" style="left: 16rem;width: 2rem; height: 2rem;"/>
</a>

</div>'; 
}

mysql_close($con);
?>


</div> 




  <div class="rightcolumn">
		<b style="color:blue;"><hr/></b>
<label style="background: #ffc0cb;">
  	<div class="card1">
      <h2>AboutMe | 关于本站</h2>
      <p>1.以攻促防，以防助攻。</p>
      <p>2.测试学习，实践划水。</p>
      <p>3.记录点滴，记录成长。</p>
    </div>
    <div class="card1" style="color:black;">
      <h2>ConcatUs | 联系我们</h2>
      
      <p><b>Email:</b><i>1460396994@qq.com</i></p>
      <P><b>地址：</b>河南省 南阳市 长江路80号 南阳理工学院。</P>

    </div>
    <div class="card1" style="color:black">
<h2>Acknowledgement | 鸣谢</h2>
      <!--
      <div class=""><img src="css/jpg/cnzd" alt="" width="400" height="300"></div>
      -->
      <b>漏洞提供者：</b>
      <p>lmg66 数量<b>3</b>个</p>
      
    </div>
    </label>
  </div>
</div>


<div class="footer">

  <p>Powered By: www.heiehi.work  &copy;豫ICP备20007688号</p>
  <?php date_default_timezone_set(PRC);$time=date("Y-m-d H:i:s");$ip=$_SERVER["REMOTE_ADDR"]; echo'<p>Time:['.$time.'] IP:['.$ip.']</p>'; ?>
  
  
</div>

<!-- add -->
<a href="http://www.heihei.work/add.php">

<img src="css/jpg/icon_add.png" class="imgadd" />

</a>
<a href="http://www.heihei.work/php/find.php">

<img src="css/jpg/icon_find.png"style="left: 6rem;" class="imgadd" />

</a>
</body>
</html>
