<?php  include("action/web_config.php");
include("include/conn.php");

$article_id=$_REQUEST['article_id'];

$sql="select * from blog_article where article_id='".$article_id."' ";

$result = mysql_query($sql, $conn); // 执行查询语句

while ($psd_array = mysql_fetch_array($result)){ //返回查询结果到数组

$article_name=$psd_array["article_name"];

$article_editor=$psd_array["article_editor"];

$article_date=$psd_array["article_date"];

$article_fenli=$psd_array["article_fenli"];

$article_con=$psd_array["article_con"];
}


?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title><?php echo $article_name; ?>-<?php echo $web_name; ?></title>
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

    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>   
      
      
     <div id="login_res"><a href="admin/login.php">登陆</a>&nbsp;/&nbsp;<a href="admin/index.php">后台</a>&nbsp;</div> 
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
         <li><a href="index.html">首页</a></li>
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
           <h2>文章<span>推荐</span><b style="padding-left:50px;"> </b></h2>
           <span></span>
           </div>
          <div class="content_text">
           <!--wz-->
           <style>
           
		   .arc_header{ text-align:center; padding:10px 0px; font-size:24px;}
		   
		   .arc_center{ padding:5px 0px;text-align:right;}
		   
		   .arc_info{ line-height:28px; text-indent:2rem; font-size:16px; }
		   
		   .arc_info img{ display:block; margin:0 auto;}
           
           </style>
           
           <div class="arc_header"><?php echo $article_name;  ?></div>
           
           <div class="arc_center">作者：<?php echo $article_editor;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布时间：<?php echo $article_date;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
           
          <div class="arc_info">
          
          <?php echo $article_con;  ?>
          </div>
        
                
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
