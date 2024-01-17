<?php

date_default_timezone_set("Asia/Taipei");
$msg_name ="姓名:" . $_POST["msg_name"] . "<br>";
$msg_option ="商品:" . $_POST["msg_option"] . "<br>";
$msg_num ="商品:" . $_POST["msg_num"] . "<br>";
$today ="時間:" . date("Y/m/d H:i:s",time()) . "<hr>";


$f = fopen("option.txt","a");
fwrite($f,$msg_name);
fwrite($f,$msg_option);
fwrite($f,$msg_num);
fwrite($f,$today);
fclose($f);

require_once("option.txt");

?>