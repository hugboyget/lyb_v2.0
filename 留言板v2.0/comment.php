<!DOCTYPE html>
<html>
<?php
include"php/session.php";
check_session();
?>
<head>
<meta charset="utf-8">
<title>留言板 | Comment</title>
    <link rel="stylesheet" href="css/comment.css">	
</head>
<body>
	<?PHP
	echo '<form method="post" action="php/comment.php?id='.$_GET['id'].'"  class="dark-matter" >';
	?>
	
    <h1>To
    <span>
		Make comment on this message.</span>
    </h1>
		
    <label>
        <span>Comment:</span>
      <textarea style="font-family:YouYuan;" id="message" name="message"  required="required" placeholder="Make comment, make happen..."></textarea>
        
    </label>
    
    <label>
    <span>&nbsp;</span>
    <button class="button" value="Send" >Send</button>
    <a href="http://www.heihei.work/index.php"  style="float: right">
        <input name="Register" type="button"  class="button" value="Cancer" />
    </a>
    </label>
    
    

    </form>
    
</body>

<footer>        
<div class="div_footer">
  <p>Powered By: www.heiehi.work  &copy;豫ICP备20007688号</p>
</div>       
</footer>

</html>
