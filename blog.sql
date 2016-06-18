/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.0.51b-community-nt-log : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `blog`;

/*Table structure for table `blog_article` */

DROP TABLE IF EXISTS `blog_article`;

CREATE TABLE `blog_article` (
  `article_id` int(11) NOT NULL auto_increment,
  `article_name` varchar(50) collate utf8_bin default NULL,
  `article_con` text collate utf8_bin,
  `article_editor` varchar(50) collate utf8_bin default NULL,
  `article_date` varchar(50) collate utf8_bin default NULL,
  `article_fenli` varchar(50) collate utf8_bin default NULL,
  `article_info` text collate utf8_bin,
  UNIQUE KEY `article_id` (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `blog_article` */

insert  into `blog_article`(`article_id`,`article_name`,`article_con`,`article_editor`,`article_date`,`article_fenli`,`article_info`) values (6,'2016考研需了解的五大常识','<p style=\"text-align:center;font-size:16px;font-family:微软雅黑;\">\r\n	<strong><img src=\"/blog/admin/kindeditor/attached/image/20160605/20160605042211_47051.jpg\" alt=\"\" /><br />\r\n</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	<strong><br />\r\n</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	<strong>◇全国<a href=\"http://kaoyan.koolearn.com/\" target=\"_blank\" class=\"link\">研究生</a>入学考试简介</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　考研，即“参加<a href=\"http://kaoyan.koolearn.com/\" target=\"_blank\" class=\"link\">硕士研究生</a>入学考试”之意。其英文表述是“Take part in the entrance exams for postgraduate schools”。考研首先要符合国家标准，其次按照程序：与学校联系、先期准备、报名、初试、调剂、复试、复试调剂、录取、毕业生就业、其他等方面依次进行。<strong><span style=\"color:#C00000;\">【</span></strong><a href=\"http://kaoyan.koolearn.com/20141202/848063.html\" target=\"_blank\"><strong>详情</strong></a><strong><span style=\"color:#C00000;\">】</span></strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　<strong>　◇基本分类</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　尽管“研究生”这个词大家绝对是耳熟能详，但到底有哪些种类，十分清楚的人大概不多。研究生教育属于国民教育序列中的高等教育，又分为两个层次：硕士研究生和博士研究生。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　目前我国硕士研究生种类比较复杂，可以从以下角度划分。<strong><span style=\"color:#C00000;\">【</span></strong><a href=\"http://kaoyan.koolearn.com/20141202/848062.html\" target=\"_blank\"><strong>详情</strong></a><strong><span style=\"color:#C00000;\">】</span></strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　<strong>　◇报考日程</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　在网报时，凡不按要求报名、网报信息误填、错填或填报虚假信息而造成不能考试或录取的，后果由考生本人承担。在现场确认时，考生本人对网上报名信息要进行认真核对并确认。经考生确认的报名信息在考试、复试及录取阶段一律不作修改，因考生填写错误引起的一切后果由其自行承担。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	<strong>　　◇报考条件</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　教育部对报考硕士研究生的考生资格要求为：国家承认学历的应届本科毕业生及往届本科毕业生;国家承认学历的专科毕业生报考硕士研究生，须毕业两年(从专科毕业到录取为研究生当年的9月1日)或两年以上，并达到与大学本科毕业生同等学力。<strong><span style=\"color:#C00000;\">【</span></strong><a href=\"http://kaoyan.koolearn.com/20141202/848064.html\" target=\"_blank\"><strong>详情</strong></a><strong><span style=\"color:#C00000;\">】</span></strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	<strong>　　◇考试科目</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　<a href=\"http://kaoyan.koolearn.com/baokao/zhuyishixiang/chushi/\" target=\"_blank\" class=\"link\">考研初试</a>共五科，满分为500分。各个专业考试科目不同，一般为政治+英语+2门专业课(或者数学+1门专业课)，不是所有专业都考数学的。具体考试科目请参考自己拟报考招生院校历年招生专业目录。\r\n</p>','刘丽','06-05 12:19:25','生活','马上进入寒假，2016年考研的同学要开始备战了。正所谓知己知彼百战百胜，在开始复习之前首先要对考研有所了解。下面是五大基本常识，供大家来熟悉了解考研。你需要知道的注意事项！'),(7,'2016考研复试流程及注意事项','<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	<a href=\"http://kaoyan.koolearn.com/\" target=\"_blank\" class=\"link\">考研</a>成绩处分后，考生比较关心的是分数线、复试和调剂的问题，基本能确定自己进入复试的考生更是要把握优势，抓紧复习，当然，除了专业课复习之外，对于复试的流程和所需资料也要一应备全，下面新东方在线分享2016<a href=\"http://kaoyan.koolearn.com/fushi/\" target=\"_blank\" class=\"link\">考研复试</a>流程及注意事项，大家抓紧看看。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　<strong>考研复试流程</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　获取复试资格—→资格审查—→体检—→专业课笔试+英语测试—→面试\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　<strong>复试流程</strong><strong>具体内容如下：</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　<strong>　1、资格审查</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　每个院校不同，关注院校发布的资格审查通知，携带相应的资料。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　<strong>　2、体检。</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　有的学校要求空腹体检。体检完了之后会安排笔试或者面试。这种情形下，同学们最好自己带好面包之类的食品和饮料，体检完了补充下体力。有的学校是允许吃东西的，请吃清淡的食物。女生不用担心体重的问题，目前还未听闻任何学校对体重和身材有要求的，所以不用为了复试拼命减肥，但是要多多运动，把身体素质搞上去。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　<strong>3、专业课笔试。</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　学校提供了考试范围的，请同学们在初试结束后尽快着手进行复习。不用考虑自己的分数高低，如果等分数公布后再进行复习，时间是不够的，因为有的学校公布分数后一周就进行复试工作。如果学校没有给考试范围，尽量找到这个专业的师哥师姐们，询问下考试的大概内容，做到有备无患。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　<strong>4、英语考试。</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　英语考试不是所有的学校都安排，请注意自己报考院校往年的复试流程。如果学校安排了英语考试，考试的内容无非就是听力、阅读、翻译、写作。相信大家经过考研的折磨，对于阅读、翻译和写作已经得心应手了。唯一没有把握的就是听力。你需要做的工作是复习英语六级的听力内容，反复听几遍，一般学校不会超过六级的难度。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　<strong>　5、综合面试。</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　复试时面试问题基本可以分为两类，一类是专业知识类、一类是综合素质类。为了照顾到考生紧张的情绪，导师会从综合素质类的题目入手，再问专业知识的题目。面试说到底是人和人的沟通过程和一场交际互动。大家在这个短暂的20分钟里面，展示自己的能力，让面试的导师满意。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　<strong><a href=\"http://kaoyan.koolearn.com/fushi/fushizhidao/\" target=\"_blank\" class=\"link\">考研复试注意事项</a>：</strong>\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　1)对待复试的态度一定要认真!即：要认真准备才是!高分被刷的比比皆是!尤其是对于跨学校或者跨专业的学生，一定要小心应付。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　2)复试的主观性很强!一碗水端平的学校在地球上是找不到的!如果你是外校的，复试完掉个十几名甚至二十几名是很正常的，心态要平和些。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　3)对于跨专业考的学生，老师一般都会在专业问题上刁难你，他要向你证明：我这个行业不是那么好进的，是很有内涵很有技术含量不是你花几个月的时间学一门专业课就能搞定的。做好受打击的心理准备吧!\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　4)复试时一定要有礼貌，进去之后和出来之前一定向老师问好。老师再怎么打击你，千万不可跟老师争吵。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　5)不管怎么说，老师都喜欢有发展潜力的学生。在复试的时候如果遇到不会的题目(这是正常的)不要说“我不会”，然后在那里呆呆的站着!(这样的话那你难了!)你可以说一些与这一问题相关的内容，要委婉一点!老师一般不会为难你的。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　6)复试时的气氛很重要!一定不要把气氛搞僵，否则你大约就不爽了!老师都不大喜欢不善言谈的人。\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　7)其实老师都挺平易近人的，不要自己先把自己给吓住了!\r\n</p>\r\n<p style=\"font-size:16px;font-family:微软雅黑;\">\r\n	　　8)考研复试里最重要的是面试，占的比例相当大。\r\n</p>','刘丽','06-05 12:30:49','生活','考研成绩处分后，考生比较关心的是分数线、复试和调剂的问题，基本能确定自己进入复试的考生更是要把握优势，抓紧复习，当然，除了专业课复习之外，对于复试的流程和所需资料也要一应备全，下面新东方在线分享2016考研复试流程及注意事项，大家抓紧看看。'),(8,'2017考研你需了解的22个常识','<p>\r\n	<span style=\"font-family:微软雅黑;font-size:16px;line-height:28px;\">不同于二战的考生，对于菜鸟新手</span><a href=\"http://kaoyan.koolearn.com/\" target=\"_blank\" class=\"link\">考研</a><span style=\"font-family:微软雅黑;font-size:16px;line-height:28px;\">人来说，可能对于相关的很多事情都不是很清楚，不能知己知彼何规划备考呢。复习之初，新东方在线就给大家介绍介绍有关考研，</span><a href=\"http://kaoyan.koolearn.com/\" target=\"_blank\" class=\"link\">研究生</a><span style=\"font-family:微软雅黑;font-size:16px;line-height:28px;\">的一些基本常识，大家了解了解。</span>\r\n</p>\r\n<p>\r\n	<p style=\"font-size:16px;font-family:微软雅黑;text-align:center;\">\r\n		<strong>2017考研你需了解的22个常识</strong>\r\n	</p>\r\n	<table width=\"100%\" border=\"1\" style=\"border:1px solid #000000;font-size:14px;color:#000000;font-family:微软雅黑;\">\r\n		<tbody>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884541.html\" target=\"_blank\">研究生的分类</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884558.html\" target=\"_blank\">专业硕士</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884563.html\" target=\"_blank\">全日制及非全日制硕士区别</a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884562.html\" target=\"_blank\">学位与学历的联系与区别</a><a href=\"http://kaoyan.koolearn.com/20151231/884542.html\" target=\"_blank\"></a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884560.html\" target=\"_blank\">专硕和学硕的8大区别</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884552.html\" target=\"_blank\">推荐免试研究生</a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884549.html\" target=\"_blank\">同等学力</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884548.html\" target=\"_blank\">定向与非定向研究生</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884556.html\" target=\"_blank\">学位证书申请流程</a><a href=\"http://kaoyan.koolearn.com/20151231/884542.html\" target=\"_blank\"></a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884555.html\" target=\"_blank\">4类优惠政策</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884542.html\" target=\"_blank\">不同身份考生报名条件</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884550.html\" target=\"_blank\">专科生考研</a><a href=\"http://kaoyan.koolearn.com/20151231/884556.html\" target=\"_blank\"></a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884557.html\" target=\"_blank\">自考生考研</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884551.html\" target=\"_blank\">初试类型</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884546.html\" target=\"_blank\">统考学科试卷内容与题型结构</a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884543.html\" target=\"_blank\">考研一区、二区划分</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884544.html\" target=\"_blank\">考研大事一览表</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884545.html\" target=\"_blank\">报名时间及流程</a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884553.html\" target=\"_blank\">英语一和英语二区别</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884554.html\" target=\"_blank\">数一、数二及学三区别</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884559.html\" target=\"_blank\">考研科目及分数</a>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td height=\"30\" align=\"center\">\r\n					<a href=\"http://kaoyan.koolearn.com/20151231/884561.html\" target=\"_blank\">396数学和199数学区别</a>\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					&nbsp;\r\n				</td>\r\n				<td height=\"30\" align=\"center\">\r\n					&nbsp;\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</p>','刘丽','06-05 12:31:40','生活','不同于二战的考生，对于菜鸟新手考研人来说，可能对于相关的很多事情都不是很清楚，不能知己知彼何规划备考呢。复习之初，新东方在线就给大家介绍介绍有关考研，研究生的一些基本常识，大家了解了解。');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(50) collate utf8_bin default NULL,
  `user_psd` varchar(50) collate utf8_bin default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`user_psd`) values (1,'admin','admin');

/*Table structure for table `webset` */

DROP TABLE IF EXISTS `webset`;

CREATE TABLE `webset` (
  `web_name` varchar(500) collate utf8_bin default NULL,
  `web_keywords` varchar(500) collate utf8_bin default NULL,
  `web_description` varchar(500) collate utf8_bin default NULL,
  `web_beian` varchar(500) collate utf8_bin default NULL,
  `web_id` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `webset` */

insert  into `webset`(`web_name`,`web_keywords`,`web_description`,`web_beian`,`web_id`) values ('网站名称','网站关键字','网站描述','网站版权',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
