<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>留言板-<?php echo $web_name; ?></title>
<link rel="stylesheet" href="<?php echo ADMIN_PUC; ?>/css/index.css"/>
<link rel="stylesheet" href="<?php echo ADMIN_PUC; ?>/css/style.css"/>
<link rel="stylesheet" href="<?php echo ADMIN_PUC; ?>/css/comment.css">
<script type="text/javascript" src="<?php echo ADMIN_PUC; ?>/js/jquery-1.11.3.min.js" ></script>
<script type="text/javascript" src="<?php echo ADMIN_PUC; ?>//js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_PUC; ?>/js/comment.js" ></script>
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
         <div class="left" id="guestbook">
           <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>留言板</h1></div>
           </div>
           <div class="g_content">
                      <!-- 评论开始 --> 
                      <div class="comment-filed">
  <!--发表评论区begin-->
  <div>
	<div class="comment-num">
		<span><?php echo ($num); ?>条评论</span>
	</div>
	<div>
		<div>
		<textarea class="txt-commit" replyid="0"></textarea>
		</div>
		<div class="div-txt-submit">
			<a class="comment-submit" parent_id="0" style="" href="javascript:void(0);"><span style=''>发表评论</span></a>
		</div>		
	</div>
  </div>
  <!--发表评论区end-->

  <!--评论列表显示区begin-->
  	<!-- <?php echo ($commentlist); ?> -->
  	<div class="comment-filed-list" >
	  	<div style="background-color:#999;"><span >全部评论</span></div><br />
	  	<div class="comment-list" >
	  		<!--一级评论列表begin-->
	  		<ul class="comment-ul">	  	
	  			<?php if(is_array($commlist)): $i = 0; $__LIST__ = $commlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($data["id"]); ?>">	  				
	  				<div >
	  					<div>
  							<img class="head-pic"  src="<?php echo ($data["head_pic"]); ?>" alt="">	
  						</div>
						<div class="cm">
							<div class="cm-header">
	  						<span><?php echo ($data["nickname"]); ?></span>
	  						<span><?php echo ($data["create_time"]); ?></span>
	  						</div>
							<div class="cm-content">
		  						<p>
		  							<?php echo ($data["content"]); ?>
		  						</p>
							</div>
		  					<div class="cm-footer">
		  						<a class="comment-reply" comment_id="<?php echo ($data["id"]); ?>" href="javascript:void(0);">回复</a>		  				
		  					</div>	
						</div>	  					  						  				
	  				</div>

					<!--二级评论begin-->
					<ul class="children">
					   <?php if(is_array($data["children"])): $i = 0; $__LIST__ = $data["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($child["id"]); ?>">	  				
			  				<div >
			  					<div>
		  							<img class="head-pic"  src="<?php echo (ADMIN_PUC); ?>/<?php echo ($child["head_pic"]); ?>" alt="">	
		  						</div>
								<div class="children-cm">
									<div  class="cm-header">
			  						<span><?php echo ($child["nickname"]); ?></span>
			  						<span><?php echo ($child["create_time"]); ?></span>
			  						</div>
									<div class="cm-content">
				  						<p>
				  							<?php echo ($child["content"]); ?>
				  						</p>
									</div>
				  					<div class="cm-footer">		  						
				  						<a class="comment-reply" replyswitch="off" comment_id="<?php echo ($child["id"]); ?>"  href="javascript:void(0);">回复</a>
				  					</div>	
								</div>	  					  						  				
			  				</div>
							
							<!--三级评论begin-->
							<ul class="children">
								<?php if(is_array($child["children"])): $i = 0; $__LIST__ = $child["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grandson): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($grandson["id"]); ?>">	  				
					  				<div >
					  					<div>
				  							<img class="head-pic"  src="<?php echo ($grandson["head_pic"]); ?>" alt="">	
				  						</div>
										<div class="children-cm">
											<div  class="cm-header">
					  						<span><?php echo ($grandson["nickname"]); ?></span>
					  						<span><?php echo ($grandson["create_time"]); ?></span>
					  						</div>
											<div class="cm-content">
						  						<p>
						  							<?php echo ($grandson["content"]); ?>
						  						</p>
											</div>
						  					<div class="cm-footer">		  						
						  						<!-- <a class="comment-reply" comment_id="1"  href="javascript:void(0);">回复</a> -->
						  					</div>	
										</div>	  					  						  				
					  				</div>
					  			</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>	
							<!--三级评论end-->

			  			</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>	
					<!--二级评论end-->

	  			</li><?php endforeach; endif; else: echo "" ;endif; ?>	  				  				  				  				  
	  		</ul>
	  		<!--一级评论列表end-->
	  	</div>		
  	</div>
  <!--评论列表显示区end-->
</div>	
                      
                      
                      
                      
                      <!-- 评论结束 --> 
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
    
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>