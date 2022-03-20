<?php
$uaccount=$_POST["uAccount"];
$upassword=$_POST["uPassword"];
$umail=$_POST["uMail"];
$utel=$_POST["uTel"];

echo "<body  background='bg2.gif'>";
echo "</body>";
echo "<center>";
echo "<h1>註冊資料</h1>";
echo "你的帳號: ".$uaccount."</br>";
echo "你的密碼: ".$upassword."</br>";
echo "你的mail: ".$umail."</br>";
echo "你的電話: ".$utel."</br>";
echo "</center>";
?>