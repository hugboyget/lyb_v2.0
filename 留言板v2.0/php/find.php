<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type"  charset="UTF-8" />
<head>
    <title> 留言板 | Find </title>
    <link rel="stylesheet" href="../css/find.css">
</head>
<body class="bod1">
 
<form class="search-box" method="post" action="../php/find.php">
    <input class="search-text" name="keyword" placeholder="Input you want find words...">
    <button class="search-btn">
    <img src="../css/jpg/icon_search.png" style="left: 11rem;width: 2rem; height: 2rem;"/>
    </button>
</form>
<hr>
<h1>Things about <?php echo $_POST['keyword']."..."; ?><h1>


<?php
include "check.php";
$keyword = $_POST['keyword'];
check_keyword($keyword);
include"public.php";
$data = mysql_query("SELECT * FROM message");
mysql_select_db("newlyb_comment",$con);
while($row= mysql_fetch_array($data))
{

$longstring = $row['title'].$row['post_time'].$row['username'].$row['sex'].$row['love'].$row['content'];
$pattern = $keyword;

if(ereg($pattern,$longstring)){

  echo "
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
<a href="../php/delete.php?id='.$time.'">
<img src="../css/jpg/icon_delete.png"  style="right: 1rem;width: 2rem; height: 2rem;"/>
</a>

<a href="../edi.php?id='.$time.'">
<img src="../css/jpg/icon_edi.png" style="left: 6rem;width: 2rem; height: 2rem;"/>
</a>

<a href="http://www.heihei.work/a/comment.php?id='.$title.'">
<img src="../css/jpg/icon_comment.png" style="left: 11rem;width: 2rem; height: 2rem;"/>
</a>

<a href="../php/love.php?id='.$time.'">
<img src="../css/jpg/icon_love.png" style="left: 16rem;width: 2rem; height: 2rem;"/>
</a>

'; 
}

}

?>



</body>
</html>














