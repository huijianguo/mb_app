<?php



include("include/conn.php");



//从数据库调用基本网站信息;


$sql="select * from webset where web_id='1'";

$result = mysql_query($sql, $conn); // 执行查询语句

while ($psd_array = mysql_fetch_array($result)){ //返回查询结果到数组

$web_name= $psd_array["web_name"]; 

$web_keywords= $psd_array["web_keywords"]; 

$web_description= $psd_array["web_description"]; 

$web_beian= $psd_array["web_beian"]; 

}


mysql_free_result($result);	
mysql_close($conn);








?>