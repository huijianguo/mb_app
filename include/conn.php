<?php
$conn=mysql_connect('localhost','root','root');
mysql_query($conn);
mysql_select_db("blog");
mysql_query("set names utf8");
?>