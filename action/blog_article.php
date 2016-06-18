<?php
include("../include/session_check.php");
include("../include/conn.php");

$flag=$_REQUEST["flag"];


$article_id=$_REQUEST['article_id'];

$article_name=$_REQUEST['article_title'];

$article_con=$_REQUEST['article_con'];

$article_editor=$_REQUEST['article_editor'];

$article_date=$_REQUEST['article_date'];

$article_fenli=$_REQUEST['article_fenli'];

$article_info=$_REQUEST['article_info'];

//判断是否是修改网站基本信息


if($flag=='add')
{
//判断进入添加模块
$myquery="insert into blog_article(article_id,article_name,article_con,article_editor,
		 article_date, article_fenli,article_info) 
        values('".$article_id."','".$article_name."','".$article_con."','".$article_editor."','".$article_date."','".$article_fenli."','".$article_info."')"; 
		
$result=mysql_query($myquery) or die("<br>更新失败: " . mysql_error());;  //执行更新SQL语句

echo "<script language='javascript'>";
echo "alert('添加成功！');";
echo "window.location.href='../admin/add_blog.php';";
echo "</script>";
	
}


if($flag=='delete')
{
//判断进入删除模块

$sql="delete  from blog_article where article_id='".$article_id."'"; 
		
$result=mysql_query($sql) or die("<br>更新失败: " . mysql_error());;  //执行更新SQL语句

echo "<script language='javascript'>";
echo "alert('删除成功！');";
echo "window.location.href='../admin/article_list.php';";
echo "</script>";
	
}



if($flag=='edit')
{
	$myquery="update blog_article set article_name='{$article_name}',article_con='{$article_con}',article_editor='{$article_editor}',article_date='{$article_date}',article_fenli='{$article_fenli}',article_info='{$article_info}' 
	where article_id='".$article_id."'";  //设定更新语句
	
$result=mysql_query($myquery) or die("<br>更新失败: " . mysql_error());;  //执行更新SQL语句

//使用javascript弹出反馈信息并返回至students.php页面
echo "<script language='javascript'>";
echo "alert('修改成功！');";
echo "window.location.href='../admin/edit_blog.php?article_id=$article_id';";
echo "</script>";
	
}











?>