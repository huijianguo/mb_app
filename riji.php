<?php  include("action/web_config.php"); 
session_start();

?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人日记-<?php echo $web_name; ?></title>
<meta name="keywords" content="<?php echo $web_keywords; ?>" />
<meta name="description" content="<?php echo $web_description; ?>" />
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/animate.css"/>
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
      <div id="login_res">
<?php if( $_SESSION['s_username']==''){?>
     	<a href="admin/login.php">登陆</a>&nbsp;&nbsp;
     <?php  }else{?>
     	<a href="admin/index.php">后台</a>&nbsp;</div> 
     <?php }?>
     
     
   
    </div>
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
         <div class="left" id="riji">
           <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>个人日记</h1></div>
           </div>
           <div class="rj_content">
                <!--时光-->
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="images/left.png" width="13" height="16" alt="左图标"/>
                        时间好象一把尺子，它能衡量奋斗者前进的进程。时间如同一架天平，它能称量奋斗者成果的重量；时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。
                </div>
                <div class="clear"></div>
              </div>
              <!--时光 end-->
                 <!--时光-->
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="images/left.png" width="13" height="16" alt="左图标"/>
                        时间好象一把尺子，它能衡量奋斗者前进的进程。时间如同一架天平，它能称量奋斗者成果的重量；时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。
                </div>
                <div class="clear"></div>
              </div>
              <!--时光 end-->
                 <!--时光-->
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="images/left.png" width="13" height="16" alt="左图标"/>
                        时间好象一把尺子，它能衡量奋斗者前进的进程。时间如同一架天平，它能称量奋斗者成果的重量；时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。
                </div>
                <div class="clear"></div>
              </div>
              <!--时光 end-->
                 <!--时光-->
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="images/left.png" width="13" height="16" alt="左图标"/>
                        时间好象一把尺子，它能衡量奋斗者前进的进程。时间如同一架天平，它能称量奋斗者成果的重量；时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。
                </div>
                <div class="clear"></div>
              </div>
              <!--时光 end-->
                 <!--时光-->
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="images/left.png" width="13" height="16" alt="左图标"/>
                        时间好象一把尺子，它能衡量奋斗者前进的进程。时间如同一架天平，它能称量奋斗者成果的重量；时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。
                </div>
                <div class="clear"></div>
              </div>
              <!--时光 end-->
                 <!--时光-->
              <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                <img src="images/my_1.jpg" width="120" height="120" alt=""/>
                </div>
                <div class="right sg_text">
                <img src="images/left.png" width="13" height="16" alt="左图标"/>
                        时间好象一把尺子，它能衡量奋斗者前进的进程。时间如同一架天平，它能称量奋斗者成果的重量；时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。
                </div>
                <div class="clear"></div>
              </div>
              <!--时光 end-->
              
           </div>
         </div>
         <!--end left -->
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
         </div>
         <!--end  right-->
         <div class="clear"></div>
         
    </div>
    <!--content end-->
    <!--footer-->
    <div id="footer">
     <p><?php echo $web_beian; ?></p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>

