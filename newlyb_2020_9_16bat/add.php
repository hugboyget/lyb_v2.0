<!DOCTYPE html>
<html>
<?php
include"php/session.php";
check_session();
?>
<head>
<meta charset="utf-8">
<title>留言板 | Add</title>
    <link rel="stylesheet" href="css/add.css">	
</head>
<body>
	<form method="post" action="php/add.php"  class="smart-green" >
    <h1>Add
    <span>My message my inspiration.</span>
    </h1>
    <label>
    <span>Title :</span>
	<input  id="title" type="title" name="title"  required="required" placeholder="Theme Of Your Message ." />
	</label>
		
    <label>
    <span>Message :</span>
    <textarea id="message" name="message"  required="required" placeholder="Write Down Your  Inspiration | Maybe Your Feelings ..."></textarea>
    </label>
    
    <label>
    <span>&nbsp;</span>
    <button class="button" value="Send" >Send</button>
    <a href="http://www.heihei.work/a/home.php"  style="float: right">
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
