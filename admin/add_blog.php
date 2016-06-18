<?php  session_start();
include("../include/session_check.php");
include("../include/config.php");
include("../include/conn.php");
//获取博客编号id

$sql="select * from blog_article order by article_id ";

$result = mysql_query($sql, $conn); // 执行查询语句

while ($psd_array = mysql_fetch_array($result)){ //返回查询结果到数组

$article_id=$psd_array["article_id"] + 1;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="../js/jquery1.42.min.js"></script>
</head>
<style>
*{margin:0; padding:0px;}
body{font-size:16px;font-family:"微软雅黑";color:#4d4d4d;}
.sty_table{ margin:20px auto;}
.sty_table tr td{ width:20%; line-height:50px; height:50px;}
.sty_table tr td:first-child{ text-align:center;}
.sty_table tr td:last-child input[type="text"]{ height:28px; line-height:28px; font-size:14px;font-family:"微软雅黑";color:#4d4d4d; text-indent:8px; border-radius:3px; text-align:left}
.sty_table tr td:last-child textarea{ font-size:14px;font-family:"微软雅黑";color:#4d4d4d;border-radius:3px; width:200px}
.web_btn{ text-align:center;}
.web_btn input[type="submit"]{ width:100px; height:30px; margin-left:300px;}
</style>
<script>
//验证输入框是否为空
function check_form()
{
	var article_title=$("#article_title").val();
	var article_editor=$("#article_editor").val();
	var article_info=$("#article_info").val();
	if(article_title=="")
{
	alert("请输入文章标题");
	$("#article_title").focus();
	return false;
}
if(article_info=="")
{
	alert("请输入文章简介！");
	$("#article_info").focus();
	return false;
}
if(article_editor=="")
{
	alert("请输入博客作者！");
	$("#article_editor").focus();
	return false;
}

}

</script>
<body>
<form action="../action/blog_article.php?flag=add" method="post" onSubmit="return check_form();">
<table width="900px" border="0" class="sty_table">
  <tr>
    <td width="20" align="center" valign="top">博文编号:</td>
    <td><input type="text" value="<?php echo $article_id  ?>" name="article_id" readonly="readonly" ></td>
  </tr>
  <tr>
    <td align="left" valign="top">博文标题:</td>
    <td><input type="text" name="article_title" id="article_title"></td>
  </tr>
  <tr>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="article_con"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
</script>  


    <td align="center" valign="top">博文内容:</td>
    <td><textarea name="article_con" style="height:400px;" id="article_con"></textarea></td>
  </tr>
   <tr>
    <td align="center" valign="top">文章简介:</td>
    <td><textarea name="article_info" id="article_info"></textarea></td>
  </tr>
  <tr>
    <td align="center" valign="top">作者:</td>
    <td><input type="text" name="article_editor" id="article_editor"   ></td>
  </tr>
  <tr>
    <td align="center" valign="top">上传时间:</td>
    <td><input type="text" name="article_date" value="<?php  echo date("m-d H:i:s"); ?>" readonly="readonly"   ></td>
  </tr>
  <tr>
    <td align="center" valign="top">文章分类:</td>
    <td>
    <select name="article_fenli">
    <option value="生活">生活</option>
    <option value="科技">科技</option>
    </select>
    </td>
  </tr>
  <tr>
 
</table>

<div class="web_btn">

<input name="" type="submit" value="上传博客" />

</div>

</form>

</body>
</html>