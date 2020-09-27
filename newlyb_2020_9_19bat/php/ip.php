<?php
$tally_file = "tally.txt";
$ip_file = "ip.txt";

$f1 = fopen($tally_file,"a+");
$f2 = fopen($ip_file,"a");

/*访问量*/
$sum = fgets($f1,10) + 1;
echo $sum;
fclose($f1);
$f1 = fopen($tally_file,"w");
fwrite($f1,$sum);

/*IP*/
$ip=$_SERVER["REMOTE_ADDR"];
date_default_timezone_set(PRC);
$date = date("Y-m-d H:i:s");
$IP = '"\r\n".$date."\r\n第---".$sum."---位访客IP:[".$ip."]访问了本站!" ';
fwrite($f2,$IP);

/*关闭文件*/
fclose($f1);
fclose($f2);

echo"您是第>>$sum<<位访客,您的IP是:[$ip]。<br>";
echo $date;

?>