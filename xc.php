<?php  include("action/web_config.php");
session_start();


?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>相册展示-<?php echo $web_name; ?></title>
<meta name="keywords" content="<?php echo $web_keywords; ?>" />
<meta name="description" content="<?php echo $web_description; ?>" />
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/waterfall.js" ></script> 
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
    </div>
    <!--header end-->
    <!--content start-->
    <div id="content_xc">
         <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>相册展示</h1></div>
         </div>
         <div class="xc_content">
          <div class="con-bg">
              <div class="w960 mt_10">
               <div class="w650">
                <ul class="tips" id="wf-main" style="display:none" >
                        <li class="wf-cld"><img src="images/photo/8.jpg"  width="200" height="178" alt="" /></li>         
                        <li class="wf-cld"><img src="images/photo/1.jpg" height="147" width="200" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/4.jpg" width="200" height="299" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/5.jpg" width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/6.jpg" width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/7.jpg" width="200" height="135" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/9.jpg"  width="200" height="300" alt="" /></li>
                        <li class="wf-cld"><img src="images/photo/10.jpg"  width="200" height="107" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/8.jpg"  width="200" height="178" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/1.jpg" height="147" width="200" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/4.jpg" width="200" height="299" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/5.jpg" width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/6.jpg" width="200" height="267"alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/7.jpg" width="200" height="135" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/9.jpg"  width="200" height="300" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/10.jpg"  width="200" height="107" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/8.jpg"  width="200" height="178" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/1.jpg" height="147" width="200" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/3.jpg"  width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/4.jpg" width="200" height="299" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/5.jpg" width="200" height="125" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/6.jpg" width="200" height="267"alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/7.jpg" width="200" height="135" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/9.jpg"  width="200" height="300" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/10.jpg"  width="200" height="107" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/2.jpg"  width="200" height="267" alt="" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="images/photo/3.jpg"  width="200" height="125" alt="" /></li>
                    </ul>
               </div>
             </div>
           </div>
         </div>
    </div>
    <!--content end-->
  <!--footer-->
    <div id="footer">
     <p><?php echo $web_beian; ?></p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
     <script>

    var timer, m = 0, m1 = $("img[rel='lazy']").length;

    function fade() {

        $("img[rel='lazy']").each(function () {

            var $scroTop = $(this).offset();

            if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {

                $(this).hide();

                $(this).attr("src", $(this).attr("lazy_src"));

                $(this).attr("top", $scroTop.top);

                $(this).removeAttr("rel");

                $(this).removeAttr("lazy_src");

                $(this).fadeIn(600);

                var _left = $(this).parent().parent().attr("_left");

                if (_left != undefined)

                    $(this).parent().parent().animate({ left: _left }, 400);

                m++;

            }

        });

        if (m < m1) { timer = window.setTimeout(fade, 300); }

        else { window.clearTimeout(timer); }

    }

    $(function () {

        $("#wf-main img[rel='lazy']").each(function (i) {

            var _left = $(this).parent().parent().css("left").replace("px", "");

            $(this).parent().parent().attr("_left", _left);

            $(this).parent().parent().css("left", 0);

        });

        fade();

    });

    $(".loading").hide();

    $("#wf-main").show();

</script>	
</body>
</html>