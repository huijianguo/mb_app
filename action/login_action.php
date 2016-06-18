<?php
session_start();

header("Content-Type:text/html;charset=utf-8");

include("../include/conn.php");


$username=$_REQUEST['user_name'];

$password=md5($_REQUEST['password']);

//对密码进行加密;


//从数据库利用用户名调用密码;


$sql="select user_psd from user where user_name='".$username."'";

$result = mysql_query($sql, $conn); // 执行查询语句

while ($psd_array = mysql_fetch_array($result)){ //返回查询结果到数组

$psd_data = md5($psd_array["user_psd"]); //将数据从数组取出并进行加密

}

mysql_free_result($result);	
mysql_close($conn);

if($psd_data=="")
{
   
   echo "<script>window.alert('登录失败,您输入的用户不存在！');window.location.href='../admin/login.php'</script>";
   exit();
  	
}
else
{
 if($psd_data==$password)
 {
	 
	  echo "<script>window.alert('登录成功！');window.location.href='../admin/index.php'</script>";
	  
	  $_SESSION['s_username']=$username;
	  
	  $_SESSION['s_psd']=$_REQUEST['password'];
	  
      exit();
	 	 
 }
 else
 {
	echo "<script>window.alert('密码不正确！');window.location.href='../admin/login.php'</script>";
    exit();
 }

	
}













?>