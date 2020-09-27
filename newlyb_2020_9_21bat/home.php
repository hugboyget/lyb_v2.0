<!DOCTYPE html>
<?php
include"php/session.php";
check_session();
?>
<html>
<head>
<meta charset="utf-8">
<title>留言板 | Home</title>
	 <link rel="stylesheet" href="css/home.css">
</head>
<style>
.imgadd{
  width: 4rem;
  height: 4rem;
  position: fixed;
  bottom: 1rem;
  left: 1rem;
  z-index: 9999; 
  width="100"
  height="100" 
}
</style>
<body>

<div class="header">
  <h1>Welcome to the world of message boards !</h1>
  <p>深窥自己的心,而后发觉一切的奇迹在你自己。 ——培根 </p>
</div>

<div class="topnav">
  <a href="index.html"> Login </a>
  <a href="register.html"> Register </a>
  <a href="php/exit.php"> Logout </a>
  <a href="userhome.php"  style="float:right"><img src="css/jpg/icon_me.png"  style="width: 1.2rem;
  height: 1.2rem;"/><?php echo $_SESSION['username']; ?></a>
</div>


<div class="row">
<div class="leftcolumn">


<?php
include"php/public.php";
$data = mysql_query("SELECT * FROM message order by id desc");
mysql_select_db("newlyb_comment",$con);
while($row= mysql_fetch_array($data))
{

echo "<div class='card'>
<p>Title:".$row['title']."</p>     
      <h5>Post time:&nbsp".$row['post_time']."</h5>    
      <p>Author:&nbsp".$row['username']."&nbsp&nbsp&nbsp&nbspSex:".$row['sex']."&nbsp&nbsp&nbsp&nbspLove:".$row['love']."</p>
      <h1>Message:<br/><br/>&nbsp&nbsp".$row['content']."</h1>"."<hr/><h5>COMMENT:</h5>";

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

<a href="http://www.heihei.work/a/comment.php?id='.$title.'">
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
  	<div class="card1">
      <h3>AboutMe | 关于本站</h3>
      <p>1.以攻促防，以防助攻。</p>
      <p>2.测试学习，实践划水。</p>
      <p>3.记录点滴，记录成长。</p>
    </div>
    <div class="card1" style="color:red;">
      <h2>LatestPosture | 最新姿势</h2>
      
      <b>New 姿势 | sql免密登录(\转译字符)</b>
      <P>账号: admin\</P>
      <P>密码: ||(1)#</P>
      <P>Post time: 2020-09-17 20:48:29</P>
      <p>关于zx的一些信息..</p>
    </div>
    <div class="card1">
      <h3>HistoryPosture | 历史姿势</h3>
      <!--
      <div class=""><img src="css/jpg/cnzd" alt="" width="400" height="300"></div>
      -->
      <b>1.姿势 | 密码sql注入</b>
      <P>'||'1'='1</P>
      <P>Post time: 2020-09-16 16:20:38</P>
      <b>2.姿势 | add.html 越权</b>
      <P>www.heihei.work/a/add.html </P>
      <P>Post time: 2020-09-14 14:46:29</P>
      
    </div>
    
  </div>
</div>


<div class="footer">

  <p>Powered By: www.heiehi.work  &copy;豫ICP备20007688号</p>
  
</div>

<!-- add -->
<a href="http://www.heihei.work/a/add.php">

<img src="css/jpg/icon_add.png" class="imgadd" />

</a>
<a href="http://www.heihei.work/a/find.html">

<img src="css/jpg/icon_find.png"style="left: 6rem;" class="imgadd" />

</a>
</body>
</html>
