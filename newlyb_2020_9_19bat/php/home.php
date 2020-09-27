<?php
include"public.php";

$data = mysql_query("SELECT * FROM message order by id desc");
while($row= mysql_fetch_array($data))
{
echo "
<h2>Title:".$row['title']."</h2>     
      <h5>Post time:".$row['post_time']."</h5>    
      <p>Author:".$row['username']."Sex:".$row['sex']."</p>
      <p>Message:".$row['content']."</p>
    </div>";	
}
mysql_close($con);
?>

