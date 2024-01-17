<?php

date_default_timezone_set("Asia/Taipei");
$msg_title ="標題:" . $_POST["msg_title"] . "<br>";
$msg_content ="內容:" . $_POST["msg_content"] . "<br>";
$today ="時間:" . date("Y/m/d H:i:s",time()) . "<hr>";


$f = fopen("news.txt","a");
fwrite($f,$msg_title);
fwrite($f,$msg_content);
fwrite($f,$today);
fclose($f);

require_once("news.txt")

?>