<?php  session_start();
include("../include/session_check.php");
include("../include/config.php");
include("../include/conn.php");


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
a{color:#4d4d4d; text-decoration:none;}
.sty_table{ margin:20px auto;}
.sty_table tr td{ width:20%; line-height:50px; height:50px; text-align:center}
.sty_table tr td:first-child{ text-align:center;}
.sty_table tr td:last-child input[type="text"]{ height:28px; line-height:28px; font-size:14px;font-family:"微软雅黑";color:#4d4d4d; text-indent:8px; border-radius:3px;}
.sty_table tr td:last-child textarea{ font-size:14px;font-family:"微软雅黑";color:#4d4d4d;border-radius:3px; width:200px}
.web_btn{ text-align:center;}
.web_btn input[type="submit"]{ width:100px; height:30px; margin-left:300px;}
.edit{ font-size:14px;}
.yeshu{ font-size:14px;}
.yema span:first-child{ padding-right:460px; padding-left:8px;}
</style>
<body>
<?php 
$PageSize = 8;  //没页显示记录数
$StartRow = 0;  //开始显示记录的编号 
//获取需要显示的页数，由用户提交
if(empty($_GET['PageNo'])){  //如果为空，则表示第1页
    if($StartRow == 0){
        $PageNo = 1;  //设定为1
    }
}else{
    $PageNo = $_GET['PageNo'];              //获得用户提交的页数
    $StartRow = ($PageNo - 1) * $PageSize;  //获得开始显示的记录编号
}
/*因为显示页码的数量是动态变化的,假如总共有一百页，则不可能同时显示100个链接。
而是根据当前的页数显示一定数量的页面链接,CounterStart用于设置显示页码的初始值*/
if($PageNo % $PageSize == 0){
    $CounterStart = $PageNo - ($PageSize - 1);
}else{
    $CounterStart = $PageNo - ($PageNo % $PageSize) + 1;
}
//显示页码的最大值
$CounterEnd = $CounterStart + ($PageSize - 1);
//获取查询项和查询关键词
$searchitem=$_REQUEST['searchitem']; 
$searchvalue=$_REQUEST['searchvalue'];
if($order_key=="")
{  
   $order_key='article_id';
}
elseif($order_key!=="")
{
   $order_key=$_REQUEST['order_key'];
}
//根据查询关键词设置不同的查询SQL语句。
if($searchvalue!="") 
  {
   $TRecord = mysql_query("SELECT * FROM blog_article where {$searchitem} like '%{$searchvalue}%'  ");
   $result = mysql_query("SELECT * FROM blog_article where {$searchitem} like '%{$searchvalue}%'  ORDER BY {$order_key} desc LIMIT $StartRow,$PageSize");
    $RecordCount = mysql_num_rows($TRecord);
    if($RecordCount=="")
	{
		echo "<script>alert('您查询的内容不存在，请您重新输入');window.location.href='ky_article_all.php';</script>";	
	}
  }
else
  {
   $TRecord = mysql_query("SELECT * FROM blog_article  ");
   $result = mysql_query("SELECT * FROM blog_article  ORDER BY article_id desc  LIMIT $StartRow,$PageSize");
   $RecordCount = mysql_num_rows($TRecord);
   if($RecordCount==0)
  {
	 echo "<script>window.alert('你还没有上传资料')</script>";
  }
  }
 //获取总记录数
 $RecordCount = mysql_num_rows($TRecord);
 
 //获取总页数
 $MaxPage = $RecordCount % $PageSize;
 if($RecordCount % $PageSize == 0){
    $MaxPage = $RecordCount / $PageSize;
 }else{
    $MaxPage = ceil($RecordCount / $PageSize);
 }
?>


    <div class="yema"> 
    <span><a href="add_blog.php" target="zjm">增加博文</a></span>
    总共:<span><?php  echo $RecordCount  ?></span> 条记录
    
     - 当前页:<span><?php echo $PageNo ?></span> 页/共 <span><?php echo  $MaxPage ?></span> 页 &nbsp;&nbsp;&nbsp;
    
  

   <?php
	  echo "<span class='yeshu'>";
        //显示第一页或者前一页的链接<
		//如果当前页不是第1页，则显示第一页和前一页的链接
        if($PageNo != 1){
            $PrevStart = $PageNo - 1;
            print "<a href=article_list.php?taPageNo=1&searchitem=$searchitem&searchvalue=$searchvalue>首页</a>: ";
            print "<a href=article_list.php?PageNo=$PrevStart&searchitem=$searchitem&searchvalue=$searchvalue>上页</a>";
        }
		print " [ ";
        $c = 0;		
        //打印需要显示的页码
        for($c=$CounterStart;$c<=$CounterEnd;$c++){
            if($c < $MaxPage){
                if($c == $PageNo){
                    if($c % $PageSize == 0){
                        print "$c ";
                    }else{
                        print "$c ,";
                    }
                }elseif($c % $PageSize == 0){
                    echo "<a href=article_list.php?PageNo=$c&searchitem=$searchitem&searchvalue=$searchvalue>$c</a> ";
                }else{
                    echo "<a href=article_list.php?PageNo=$c&searchitem=$searchitem&searchvalue=$searchvalue>$c</a> ,";
                }//END IF
            }else{
                if($PageNo == $MaxPage){
                    print "$c ";
                    break;
                }else{
                    echo "<a href=ky_article_all.php?PageNo=$c&searchitem=$searchitem&searchvalue=$searchvalue>$c</a> ";
                    break;
                }//END IF
            }//END IF
       }//NEXT

      echo "] ";
      if($PageNo < $MaxPage){  //如果当前页不是最后一页，则显示下一页链接
          $NextPage = $PageNo + 1;
          echo "<a href=article_list.php?PageNo=$NextPage&searchitem=$searchitem&searchvalue=$searchvalue>下页</a>";
		  print " : ";
          echo "<a href=article_list.php?PageNo=$MaxPage&searchitem=$searchitem&searchvalue=$searchvalue>末页</a>";
      }
		echo "</span>";
      ?>
  </div>      
<table width="960" border="0" class="sty_table">
  <tr>
    <td width="10%">博文编号</td>
    <td width="40%">文章标题</td>
    <td width="15%">文章作者</td>
    <td width="15%">发布时间</td>
    <td width="20%">编辑</td>
  </tr>
     <?php
$i = 1;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    $bil = $i + ($PageNo-1)*$PageSize;
?>

  <tr>
<script>
  function confire(info)
  {
	 return window.confirm('是否要删除博文编号为' +info);
  }
</script>
    <td><?php echo $row['article_id'] ?></td>
    <td><a href="../article_info.php?article_id=<?php echo $row['article_id'] ?>" target="_blank"><?php echo mb_substr($row['article_name'],0,10,'utf-8') ?>...</a></td>
    <td><?php echo $row['article_editor'] ?></td>
    <td><?php echo $row['article_date'] ?></td>
    <td class="edit"><a href="edit_blog.php?article_id=<?php echo $row['article_id'] ?>">修改</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    
    <a href="../action/blog_article.php?flag=delete&article_id=<?php echo $row['article_id'] ?>" onclick="return confire(<?php echo $row['article_id'] ?>)">删除</a></td>
    
  </tr>
    <?php
  $i++;
}?>
 

</table>



</body>
</html>