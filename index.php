<?php  include("action/web_config.php");
include("include/conn.php");
session_start();



?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title><?php echo $web_name; ?></title>
<meta name="keywords" content="<?php echo $web_keywords; ?>" />
<meta name="description" content="<?php echo $web_description; ?>" />
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

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

    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>   
      
      
     <div id="login_res">
     <?php if( $_SESSION['s_username']==''){?>
     	<a href="admin/login.php">登陆</a>&nbsp;&nbsp;
     <?php  }else{?>
     	<a href="admin/index.php">后台</a>&nbsp;</div> 
     <?php }?>
     
     
   
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
         <li><a href="index.php">首页</a></li>
         <li><a href="about.php">关于我</a></li>
         <li><a href="shuo.php">碎言碎语</a></li>
         <li><a href="riji.php">个人日记</a></li>
         <li><a href="xc.php">我的旅途</a></li>
        
         <li><a href="comment.php">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
         <!--left-->
         <div class="left" id="c_left">
           <div class="s_tuijian">
           <h2>文章<span>推荐</span><b style="padding-left:50px;"> <?php
	  echo "<span class='yeshu'>";
        //显示第一页或者前一页的链接<
		//如果当前页不是第1页，则显示第一页和前一页的链接
        if($PageNo != 1){
            $PrevStart = $PageNo - 1;
            print "<a href=index.php?taPageNo=1&searchitem=$searchitem&searchvalue=$searchvalue>首页</a>: ";
            print "<a href=index.php?PageNo=$PrevStart&searchitem=$searchitem&searchvalue=$searchvalue>上页</a>";
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
                    echo "<a href=index.php?PageNo=$c&searchitem=$searchitem&searchvalue=$searchvalue>$c</a> ";
                }else{
                    echo "<a href=index.php?PageNo=$c&searchitem=$searchitem&searchvalue=$searchvalue>$c</a> ,";
                }//END IF
            }else{
                if($PageNo == $MaxPage){
                    print "$c ";
                    break;
                }else{
                    echo "<a href=index.php?PageNo=$c&searchitem=$searchitem&searchvalue=$searchvalue>$c</a> ";
                    break;
                }//END IF
            }//END IF
       }//NEXT

      echo "] ";
      if($PageNo < $MaxPage){  //如果当前页不是最后一页，则显示下一页链接
          $NextPage = $PageNo + 1;
          echo "<a href=index.php?PageNo=$NextPage&searchitem=$searchitem&searchvalue=$searchvalue>下页</a>";
		  print " : ";
          echo "<a href=index.php?PageNo=$MaxPage&searchitem=$searchitem&searchvalue=$searchvalue>末页</a>";
      }
		echo "</span>";
      ?></b></h2>
           <span></span>
           </div>
          <div class="content_text">
           <!--wz-->
            <?php
$i = 1;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    $bil = $i + ($PageNo-1)*$PageSize;
?>
           
           
           <div class="wz">
            <h3><a href="article_info.php?article_id=<?php echo $row['article_id'] ?>" title="<?php echo $row['article_name'] ?>" target="_blank"><?php echo $row['article_name'] ?></a></h3>
             <dl>
               <dt><img src="images/s.jpg" width="200"  height="123" alt=""></dt>
               <dd>
                 <p class="dd_text_1"><?php echo $row['article_info'] ?>.....</p>
               <p class="dd_text_2">
               <span class="left author"><?php echo $row['article_editor'] ?></span><span class="left sj">时间:<?php echo $row['article_date'] ?></span>
               <span class="left fl">分类:<a href="#" title="<?php echo $row['article_fenli'] ?>"><?php echo $row['article_fenli'] ?></a></span><span class="left yd"><a href="article_info.php?article_id=<?php echo $row['article_id'] ?>" title="阅读全文">阅读全文</a>
               </span>
                <div class="clear"></div>
               </p>
               </dd>
               <div class="clear"></div>
             </dl>
            </div>
       <?php
  $i++;
}?>         
            
                
           </div>
         </div>
         <!--left end-->
         <!--right-->
         <div class="right" id="c_right">
          <div class="s_about">
          <h2>关于博主</h2>
           <img src="images/my.jpg" width="230" height="230" alt="博主"/>
           <p>博主：刘丽</p>
           <p>职业：学生</p>
           <p>简介：考研必胜！</p>
           <p>
           <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
           <div class="clear"></div>
           </p>
          </div>
          <!--栏目分类-->
           <div class="lanmubox">
              <div class="hd">
               <ul><li>精心推荐</li><li>最新文章</li><li class="hd_3">随机文章</li></ul>
              </div>
              <div class="bd">
                <ul>
					<li><a href="#" title="2017考研你需了解的22个常识">2017考研你需了解的22个常识</a></li>
					<li><a href="#" title="2016考研复试流程及注意事项">2016考研复试流程及注意事项</a></li>
					<li><a href="#" title="2016考研需了解的五大常识">2016考研需了解的五大常识</a></li>
					
				</ul>
                 <ul>
					<li><a href="#" title="2017考研你需了解的22个常识">2017考研你需了解的22个常识</a></li>
					<li><a href="#" title="2016考研复试流程及注意事项">2016考研复试流程及注意事项</a></li>
					<li><a href="#" title="2016考研需了解的五大常识">2016考研需了解的五大常识</a></li>
					
				</ul>
                 <ul>
					<li><a href="#" title="2017考研你需了解的22个常识">2017考研你需了解的22个常识</a></li>
					<li><a href="#" title="2016考研复试流程及注意事项">2016考研复试流程及注意事项</a></li>
					<li><a href="#" title="2016考研需了解的五大常识">2016考研需了解的五大常识</a></li>
					
				</ul>
                 
                
              </div>
           </div>
           <!--end-->
           <div class="link">
            <h2>友情链接</h2>
            <p><a href="#">段亮个人博客</a></p>
           </div>
         </div>
         <!--right end-->
         <div class="clear"></div>
    </div>
    <!--content end-->
    <!--footer start-->
    <div id="footer">
     <p><?php echo $web_beian; ?></p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>
