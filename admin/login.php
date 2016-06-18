<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>博客登录</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="../css/index.css"/>
<link rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/jquery1.42.min.js"></script>
<script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
<script>

function show_psd()
{
	
var val=$("#psd").val();

if(val=="")
{
	alert("请输入登录密码！");
	return false;
}
alert(val);
	
}

function check_form()
{
	var user_name=$("#username").val();
	var psd=$("#psd").val();
	if(user_name=="")
{
	alert("请输入用户名！");
	$("#username").focus();
	return false;
}
if(psd=="")
{
	alert("请输入登录密码！");
	$("#psd").focus();
	return false;
}
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
      
     <div id="login_res"><a href="#">登陆</a></div> 
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
         <li><a href="../guestbook.php">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
         <!--left-->
         <div class="left" id="c_left">
           <div class="s_tuijian">
           <h2>博客<span>后台登录</span></h2>
           </div>
          <div class="content_text">
           <!--wz-->
          <?php  include("login_con.html");    ?>
           </div>
         </div>
         <!--left end-->
         <!--right-->
         <div class="right" id="c_right">
          <div class="s_about">
          <h2>关于博主</h2>
           <img src="../images/my.jpg" width="230" height="230" alt="博主"/>
           <p>博主：XX</p>
           <p>职业：web前端、视觉设计</p>
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
     <p>Design by:<a href="#" target="_blank">少年</a> 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>
