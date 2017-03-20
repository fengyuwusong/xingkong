<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页丨星空学生创新中心</title>
	<meta name="keywords" content="华南理工大学广州学院,华汽,华广,星空,学生创新中心,星空学生创新中心,www.xingkong.us">
	<meta name="description" content="华南理工大学广州学院,华汽,华广,星空,学生创新中心,星空学生创新中心,www.xingkong.us">
    	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    	<meta name="viewport" content="width=device-width" initial-scale="1">
    	<link rel="stylesheet" type="text/css" href="/xingkong/Public/css/index.css" />
    	<link rel="stylesheet" type="text/css" href="/xingkong/Public/css/banner.css" />
    	<script type="text/javascript" src="/xingkong/Public/js/jquery.js"></script>
	<!--[if lt IE 9 ]>
	   <script type="text/javascript" src="/xingkong/Public/js/selectivizr-min.js"></script>
	< ![endif]-->
</head>
<body>
	<!-- 头部导航栏 -->
	<header>
		<!-- 导航栏中心内容 -->
		<nav>
			<!--首页logo  -->
			<div id="logo">
				<a href="http://www.xingkong.us"><img src="/xingkong/Public/image/logo.png" /></a>
			</div>
			<!-- 导航条 -->
			<div id="nav">
				<li><a href="http://www.xingkong.us" class="active">首页</a></li>
				<li id="nav-pro"><a href="#">星产品</a>
					<!-- 二级菜单 -->
					<ul class="sec-nav">
	                        				<li><a href="http://lib.xingkong.us">学习库</a></li>
	                        				<li><a href="http://market.xingkong.us/">二手市场</a></li>
	                        				<li><a href="http://www.xingkong.us/home/WeWillComeBack.html">资源网</a></li>
                    				</ul>
				</li>
				<li id="nav-app"><a href="#">星应用</a>
					<ul class="sec-nav">
						<li><a href="http://fir.im/starmark" target="_blank">猩印</a></li>
                        					<li><a href="http://fir.im/xingpostcard" target="_blank">星笺</a></li>
                        					<li><a href="http://fir.im/starmemories" target="_blank">星忆</a></li>
                        					<li><a href="http://www.xingkong.us/home/starcard" target="_blank">星名片</a></li>
					</ul>
				</li>
				<li><a href="<?php echo U('Home/index/about');?>">星足迹</a></li>
				<!-- <li><a href="#">宣讲会</a></li> -->
				<li><a href="http://live.xingkong.us">星直播</a></li>
			</div>
		</nav>
		<!-- 轮播图 -->
		<div id="banner">
			<!-- 图片容器 -->
			<div id="picList">
				<a href="javascript:void()" class="img img1" style="background-image: url(/xingkong/Public/image/banner/<?php echo ($banner1); ?>);"></a>
				<a href="http://www.xingkong.us/home/starcard" class="img img2" style="background-image: url(/xingkong/Public/image/banner/<?php echo ($banner2); ?>);"></a>
				<a href="http://market.xingkong.us/" class="img img3" style="background-image: url(/xingkong/Public/image/banner/<?php echo ($banner3); ?>);"></a>
				<a href="http://live.xingkong.us" class="img img4" style="background-image: url(/xingkong/Public/image/banner/<?php echo ($banner4); ?>);"></a>
			</div>
			<!-- 小圆点 -->
			<div id="buttons">
			</div>
		</div>
	</header>
	<!-- 内容容器 -->
	<div id="container">
		<!-- 关于星空 -->
		<div id="about-us">
			<div class="word-title">
				<p>关于星空</p>
				<p>WHAT WE DO</p>
			</div>
			<div id="about-content">
				<div id="allcontent">
					<div id="tec">
						<div class="tecimg img">
							<div class="full"></div>
							<div class="tecicon icon"></div>
						</div>
						<div class="word">
							<h3>技术研发中心 </h3>
							<div class="line"></div>
							<p>下分安卓，iOS及网页三个方向，星空核心技术所在。安卓主要负责安卓的手机应用开发与维护，iOS主要针对苹果手机的应用开发与维护；网页分为前端与后端，共同开发及维护网页运行。</p>
						</div>
					</div>
					<div id="des">
						<div class="desimg img">
							<div class="full"></div>
							<div class="desicon icon"></div>
						</div>
						<div class="word">
							<h3>文化传媒中心</h3>
							<div class="line"></div>
							<p>下分平面设计，视频及摄影三个方向。平面设计主要负责星空海报设计，体现星空高端设计水平；视频方向主要负责星空宣传影片的制作及后期处理；摄影方向主要负责向公众号提供摄影图及培养新人摄影触觉，整体提高星空平面水平。</p>
						</div>
					</div>
					<div id="video">
						<div class="videoimg img">
							<div class="full"></div>
							<div class="videoicon icon"></div>
						</div>
						<div class="word">
							<h3>运营策划中心</h3>
							<div class="line"></div>
							<p>下分公关策划，星产品及新媒体三个方向。公关策划主要管理星空内部行政事务，形象管理等方面；星产品主要负责星空产品构思；新媒体主要负责星空公众平台及微博的更新，协助星空对外推广。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="case">
			<div class="word-title blackword">
				<p>星空案例</p>
				<p>WHAT WE DID</p>
			</div>
			<div id="case-view">
				<div id="case-content">
					<!-- JQ动态添加 -->
				</div>
			</div>
			<div id="casebutton" class="ccbutton"></div>
		</div>
		<div id="culture">
			<div class="word-title blackword">
				<p>组织文化</p>
				<p>ABOUT US</p>
			</div>
			<div id="culture-view">
				<div id="culture-content">
					<!-- JQ动态添加 -->
				</div>
			</div>
			<div id="culbutton" class="ccbutton"></div>

		</div>
		<div id="weixinus">
			<div id="uspic">
				<div id="uspic-title">
					<h3>微信公众号</h3>
					<p>XINGKONGUS</p>
				</div>
				<p>查看往期推文</p>
				<img src="/xingkong/Public/image/down.png" id="down" class="romate" />
			</div>
			<div id="usword">
				<div id="usword-content">
					
				</div>
			</div>
		</div>

	</div>
	<footer>
		<div id="footer-content">
			<img src="/xingkong/Public/image/footerlogo.png" class="footLogo" />
			<div id="link">
				<a href="http://weibo.com/gzautosky" title="微博" target="_blank"><img src="/xingkong/Public/image/weibo.png" /></a>
				<a href="http://i.youku.com/u/UNTQ2MDQ1Njk2" title="星空优酷" target="_blank"><img src="/xingkong/Public/image/youku.png" /></a>
				<a href="http://www.xingkong.us/home/blog" title="博客"><img src="/xingkong/Public/image/blog.png" /></a>
				<a href="http://wpa.qq.com/msgrd?v=3&uin=864700728&site=qq&menu=yes"" title="联系我们"><img src="/xingkong/Public/image/callus.png" /></a>
			</div>
			<div id="copyright">
				<p>华南理工大学广州学院行政楼801</p>
				<p>星空学生创新中心丨Copyright©2006-2017</p>
			</div>
		</div>
	</footer>
	<!--侧边栏导航-->
	<div id="tool">
	    	<a href="javascript:;"  id="sch_nav"></a>
	    	<a href="javascript:;"  id="btn"></a>
	    	<div id="nav_ifo">
	        		<ul style="width: 110px;">
		            		<a href="http://www.gcu.edu.cn"><li style="width: 60px">学校主页</li></a>
		            		<a href="http://125.216.144.99/"><li>教务管理系统</li></a>
	        		</ul>
	        		<ul class="sch_nav1">
		            		<a href="http://cwc.gcu.edu.cn"><li>财务处</li></a>
		            		<a href="http://jwc.gcu.edu.cn"><li>教务处</li></a>
	        		</ul>
	        		<ul class="sch_nav2">
		            		<a href="http://lib.gcu.edu.cn/home/"><li>图书馆</li></a>
		            		<a href="http://rsc.gcu.edu.cn"><li>人事处</li></a>
	        		</ul>
	        		<ul class="sch_nav3">
	           			<a href="http://gqt.gcu.edu.cn/"><li>校团委</li></a>
	            			<a href="http://hq.gcu.edu.cn/"><li>后勤处</li></a>
	            			<a href="http://xsc.gcu.edu.cn"><li>学生处</li></a>
	        		</ul>
	    	</div>
	</div>
	<script type="text/javascript">
		var article_url="<?php echo U('home/index/getArticle');?>";
	</script>
	<!-- 导航栏JQ -->
	<script type="text/javascript" src="/xingkong/Public/js/nav.js"></script>
	<!-- banner滚动栏JQ -->
	<script type="text/javascript" src="/xingkong/Public/js/banner.js"></script>
	<!-- 星空案例JQ -->
	<script type="text/javascript" src="/xingkong/Public/js/case.js"></script>
	<!-- 组织文化 -->
	<script type="text/javascript" src="/xingkong/Public/js/culture.js"></script>
	<script type="text/javascript" src="/xingkong/Public/js/main.js"></script>
</body>
</html>