<?php  include("../include/session_check.php"); 
 
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>博客后台</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="../css/index.css"/>
<link rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/jquery1.42.min.js"></script>
<script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
<script>
  function confire()
  {
	 return window.confirm('是否要注销！');
  }
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>   
      
     <div id="login_res"><a href="#"><?php echo "亲亲博主：".$_SESSION['s_username']; ?>已登录</a></div> 
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
         <li><a href="../index.php">首页</a></li>
         <li><a href="../about.php">关于我</a></li>
         <li><a href="../shuo.php">碎言碎语</a></li>
         <li><a href="../riji.php">个人日记</a></li>
         <li><a href="../xc.php">我的旅途</a></li>
         <li><a href="../comment.php">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
         <!--left-->
         <div class="left" id="c_left" style="width:1000px; height:860px">
           <div class="s_tuijian">
           <h2>博客<span>后台管理页面</span></h2>
           <div class="channel">
           <span><a href="system.php" target="zjm">网站基本信息</a></span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
           <span><a href="article_list.php" target="zjm">博客资讯</a></span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
           <span><a href="../action/loginout.php"  onClick="return confire()">注销</a></span>
           </div>
           </div>
          <div class="content_text">
           <!--wz-->
           <div class="web_houtai">
           
            <iframe src="system.php" name="zjm" frameborder="0" width="1000px" height="860px"></iframe>
           
           </div>
                        
           </div>
         </div>
         <!--left end-->
         <!--right-->
       <div style="clear:both"></div>
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
     <p>Design by:<a href="#" target="_blank">少年</a> 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>
