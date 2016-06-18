<?php

session_start();

header("Content-Type:text/html;charset=utf-8");


if( $_SESSION['s_username']=="")
{
	
echo "<script language='javascript'>";
echo "alert('警告,非法登录!！');";
echo "window.location.href='../admin/login.php';";
echo "</script>";
	
}





?>