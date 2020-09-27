<!DOCTYPE html>
<html>
<?php
include"php/session.php";
check_session();
?>
<head>
<meta charset="utf-8">
<title>留言板 | Edi</title>
    <link rel="stylesheet" href="css/add.css">	
</head>
<body>
<?php
$time =base64_decode($_GET['id']);
include "php/public.php";
include "php/check.php";
check_keyword($time);

$result = mysql_query("SELECT title,content FROM message WHERE post_time = '$time' ");
$row = mysql_fetch_array($result);
$title = $row['title'];
$content = $row['content'];
$time =base64_encode($time);

mysql_close($con);


echo '

<form method="post" action="php/edi.php?id='.$time.'"  class="smart-green" >
    <h1>Edi
    <span>My message my inspiration.</span>
    </h1>

    <label>
    <span>Title :</span>
	<input  id="title" type="title" name="title"  required="required" value="'.$title.'" />
	</label>
		
    <label>
    <span>Message :</span>
    <textarea id="message" name="message"  required="required" >'.$content.'</textarea>
    </label>
    
    <label>
    <span>&nbsp;</span>
    <button class="button" value="Send" >Updata</button>
    <a href="http://www.heihei.work/a/home.php"  style="float: right">
        <input name="Register" type="button"  class="button" value="Cancer" />
  </a>
    </label>
    
    </form>

';
?>
	
    
</body>

<footer>        
<div class="div_footer">
  <p>Powered By: www.heiehi.work  &copy;豫ICP备20007688号</p>
</div>       
</footer>

</html>
