<?php  session_start();
include("../include/session_check.php");
include("../include/config.php");
include("../include/conn.php");
//从数据库调用相关字段

$sql="select * from webset ";

$result = mysql_query($sql, $conn); // 执行查询语句

while ($psd_array = mysql_fetch_array($result)){ //返回查询结果到数组

$w_name=$psd_array["web_name"];

$w_keywords=$psd_array["web_keywords"];

$w_description=$psd_array["web_description"];

$w_beian=$psd_array["web_beian"];

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
*{margin:0; padding:0px;}
body{font-size:16px;font-family:"微软雅黑";color:#4d4d4d;}
.sty_table{ margin:20px auto;}
.sty_table tr td{ width:20%; line-height:50px; height:50px;}
.sty_table tr td:first-child{ text-align:center;}
.sty_table tr td:last-child input[type="text"]{ height:28px; line-height:28px; font-size:14px;font-family:"微软雅黑";color:#4d4d4d; text-indent:8px; border-radius:3px;}
.sty_table tr td:last-child textarea{ font-size:14px;font-family:"微软雅黑";color:#4d4d4d;border-radius:3px; width:200px}
.web_btn{ text-align:center;}
.web_btn input[type="submit"]{ width:100px; height:30px; margin-left:300px;}
</style>
<body>
<form action="../action/web_action.php?flag=web" method="post">
<table width="500" border="0" class="sty_table">
  <tr>
    <td width="20%">网站名称：</td>
    <td><input type="text" value="<?php echo $w_name  ?>" name="web_name" ></td>
  </tr>
  <tr>
    <td>网站关键字:</td>
    <td><input type="text" value="<?php echo $w_keywords  ?>" name="web_keywords" ></td>
  </tr>
  <tr>
    <td>网站描述:</td>
    <td><textarea name="web_description"><?php echo $w_description  ?></textarea></td>
  </tr>
  <tr>
    <td>网站访问ip:</td>
    <td><input type="text" value="<?php  echo $_SERVER['SERVER_ADDR'] ?>"  readonly="readonly" title="禁止编辑！" ></td>
  </tr>
  <tr>
    <td>端口号:</td>
    <td><input type="text" value="<?php  echo $_SERVER['REMOTE_PORT'] ?>" readonly="readonly" title="禁止编辑！"  ></td>
  </tr>
  <tr>
    <td>当前用户:</td>
    <td><input type="text" value="<?php  echo  $_SESSION["s_username"]; ?>" readonly="readonly" title="禁止编辑！"  ></td>
  </tr>
  <tr>
    <td>登录密码:</td>
    <td><input type="text" value="<?php  echo  $_SESSION["s_psd"] ?>"  readonly="readonly" title="禁止编辑！" ></td>
  </tr>
  <tr>
    <td>系统当前时间：</td>
     <td><input type="text" value="<?php  echo date("Y-m-d H:i:s"); ?>" readonly="readonly" title="禁止编辑！"  ></td>
  </tr>

  <tr>
    <td>网站版权信息:</td>
    <td><input type="text" value="<?php  echo $w_beian ?>"    name="web_beian" ></td>
  </tr>
</table>

<div class="web_btn">

<input name="" type="submit" value="修改" />

</div>

</form>

</body>
</html>