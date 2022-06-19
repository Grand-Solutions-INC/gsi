<?php
define ('url',"https://api.telegram.org/bot5130221153:AAHxs162H6U677rA3fo7OuRFX7mdHKSY7DU/");
$name = $_GET['name'];
$message = $_GET['message'];
$chat_id = '1851854218';
$message = urlencode("Name:".$name."\n Message : ".$message);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>