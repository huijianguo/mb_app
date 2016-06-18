<?php

include("../include/conn.php");

$flag=$_REQUEST["flag"];

$web_name=$_REQUEST['web_name'];

$web_keywords=$_REQUEST['web_keywords'];

$web_description=$_REQUEST['web_description'];

$web_beian=$_REQUEST['web_beian'];

//判断是否是修改网站基本信息

if($flag=='web')
{
	$myquery="update webset set web_name='{$web_name}',web_keywords='{$web_keywords}',web_description='{$web_description}',web_beian='{$web_beian}' where web_id='1'";  //设定更新语句
	
$result=mysql_query($myquery) or die("<br>更新失败: " . mysql_error());;  //执行更新SQL语句

//使用javascript弹出反馈信息并返回至students.php页面
echo "<script language='javascript'>";
echo "alert('修改成功！');";
echo "window.location.href='../admin/system.php';";
echo "</script>";
	
}











?>