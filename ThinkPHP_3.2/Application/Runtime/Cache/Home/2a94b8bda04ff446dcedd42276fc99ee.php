<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/ThinkPHP_3.2/Public/css/public.css">
	<link rel="stylesheet" href="/ThinkPHP_3.2/Public/css/hf.css">
	<link rel="stylesheet" href="/ThinkPHP_3.2/Public/css/second.css">
	<link rel="stylesheet" href="/ThinkPHP_3.2/Public/css/index.css">
</head>
<body>
	<div class="header">
		<div class="login">
			<div class="loginin">
				<a href="#" class='appname'>儒思APP</a>
				<ul class="uls">
					<li><img src="/ThinkPHP_3.2/Public/img/导航新浪.png" alt="" class='sina'></li>
					<li><img src="/ThinkPHP_3.2/Public/img/导航微信.png" alt="" class='wechat'></li>
					<li><img src="/ThinkPHP_3.2/Public/img/导航QQ.png" alt="" class='qq'></li>
					<?php if(empty($data)): ?><li><a href="/ThinkPHP_3.2/index.php/Home/Index/register">注册</a></li>
						<li><a href="/ThinkPHP_3.2/index.php/Home/Index/login">马上登录│</a></li>
						<?php else: ?>
						<li><a href='#'>欢迎 <?php echo ($data); ?></a></li>
						<li><a href="<?php echo U('User/logout');?>">退出登录</a></li><?php endif; ?>
				</ul>
			</div>
			<div class="nav">
				<div class="navin">
					<img src="/ThinkPHP_3.2/Public/img/儒思logo.png" alt="" class='logo'>
					<div class="searchbox">
						<input class="searchtext" type="text" placeholder="请输入关键字"/>
						<input class="search" type="button" value="搜索"/>
					</div>
					<ul class="uls">
						<li style='color:#063391;border-bottom: 2px solid #063391;'>首页</li>
						<li>HR微课</li>
						<li>圈子问答</li>
						<li>资料下载</li>
						<li>HR需要</li>
						<li>HR资讯</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
			
	<div class="main">
		<div class="banner">					
			<div class="lunbo">
				<div class="pullDown">
					<ul class="pullDownList">
						<li class="menulihover"><a href="###">HR晋升课堂</a></li>
						<p></p>
						<li><a href="###">人力领域课程</a></li>
						<p></p>
						<li><a href="###">儒师有约</a></li>
						<p></p>
						<li><a href="###" style="border:none;height: 100px;">取证课程</a></li>
					</ul>
								<!-- 下拉详细列表具体分类 -->
			 	<div class="yMenuListCon">
					<div class="yMenuListConin">
						<div class="yMenuLCinList">
							<h3>HR进修课堂</h3>
							<p>
								<a href="###">专员必修课</a>/
								<a href="###">主管必修课</a>/
								<a href="###">经理必修课</a>/
								<a href="###">高层必修课</a>
							</p>
						</div>
						<div class="yMenuLCinList">
							<h3>推荐</h3>
							<p>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
							</p>
						</div>											
					</div>
					<div class="yMenuListConin">
						<div class="yMenuLCinList">
							<h3>人力领域课程</h3>
							<p>
								<a href="###">专员必修课</a>/
								<a href="###">主管必修课</a>/
								<a href="###">经理必修课</a>/
								<a href="###">高层必修课</a>
							</p>
						</div>
						<div class="yMenuLCinList">
							<h3>推荐</h3>
							<p>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
							</p>
						</div>											
					</div>
					
					
					<div class="yMenuListConin">
						<div class="yMenuLCinList">
							<h3>儒师有约</h3>
							<p>
								<a href="###">专员必修课</a>/
								<a href="###">主管必修课</a>/
								<a href="###">经理必修课</a>/
								<a href="###">高层必修课</a>
							</p>
						</div>
						<div class="yMenuLCinList">
							<h3>取证课程</h3>
							<p>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
							</p>
						</div>											
					</div>
					
					
					<div class="yMenuListConin">
						<div class="yMenuLCinList">
							<h3>HR进修课堂</h3>
							<p>
								<a href="###">专员必修课</a>/
								<a href="###">主管必修课</a>/
								<a href="###">经理必修课</a>/
								<a href="###">高层必修课</a>
							</p>
						</div>
						<div class="yMenuLCinList">
							<h3>推荐</h3>
							<p>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
								<a href="###"><span>课程</span><span>|</span><span>如何认定员工在本单位的连续工作年限</span></a>
							</p>
						</div>											
					</div>
		
				</div>
		
				</div>
				
				
				
				
			</div>
		</div>

		<div class="content">
			<ul class="rusi">
				<li class="rus" style="width:240px;margin-right: 0px;">
					<p style="width:160px; text-align:right;padding-right:30px;font-size: 26px; margin-top:60px; color: #Fff; background:url(/ThinkPHP_3.2/Public/img/mor.png) no-repeat center right">儒思精选</p>
					
				</li>
				<li>
					<div><img src="/ThinkPHP_3.2/Public/img/sj.png" /><span></span></div>
					<p>一对一解答专业问题</p>
				</li>
				<li>
					<div><img src="/ThinkPHP_3.2/Public/img/fl.png" /><span></span></div>
					<p>一对一解答专业问题</p>
				</li>
				<li>
					<div><img src="/ThinkPHP_3.2/Public/img/zj.png" /><span></span></div>
					<p>一对一解答专业问题</p>
				</li>
			</ul>
			
			
			
			<div class="interest">
				<p class="span1"></p>
				<p class="span2">猜你感兴趣</p>
				<p class="span3"></p>
				<p class="more">换一批</p>
				<ul>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
				</ul>
			</div>
						
			<div class="interest weike">
				<p class="span1"></p>
				<p class="span2">热门微课</p>
				<p class="span3"></p>
				<p class="more">分享</p>
				<ul>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
				</ul>
			</div>
									
			<div class="ziliao">
				<p class="span1"></p>
				<p class="span2">热门资料与问答</p>
				<p class="span3"></p>
				<div class="zlcontent">
					<div class="left">
						<p>
							<span style="float: left;">热门资料</span>
							<span style="float: right;">更多</span>
						</p>
						<ul class="zlload">
							<li>
								<img src="/ThinkPHP_3.2/Public/img/word.png" />
								<div>
									<p>软件专业的职业生涯规划设计</p>
									<span>免费下载</span>
									<span>已下载122次</span>
								</div>
								<img src="/ThinkPHP_3.2/Public/img/111.png" />
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/word.png" />
								<div>
									<p>软件专业的职业生涯规划设计</p>
									<span>免费下载</span>
									<span>已下载122次</span>
								</div>
								<img src="/ThinkPHP_3.2/Public/img/111.png" />
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/word.png" />
								<div>
									<p>软件专业的职业生涯规划设计</p>
									<span>免费下载</span>
									<span>已下载122次</span>
								</div>
								<img src="/ThinkPHP_3.2/Public/img/111.png" />
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/word.png" />
								<div>
									<p>软件专业的职业生涯规划设计</p>
									<span>免费下载</span>
									<span>已下载122次</span>
								</div>
								<img src="/ThinkPHP_3.2/Public/img/111.png" />
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/word.png" />
								<div>
									<p>软件专业的职业生涯规划设计</p>
									<span>免费下载</span>
									<span>已下载122次</span>
								</div>
								<img src="/ThinkPHP_3.2/Public/img/111.png" />
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/word.png" />
								<div>
									<p>软件专业的职业生涯规划设计</p>
									<span>免费下载</span>
									<span>已下载122次</span>
								</div>
								<img src="/ThinkPHP_3.2/Public/img/111.png" />
							</li>
							
						</ul>
					</div>
					
					<div class="right">
						<p>
							<span style="float: left;">热门问答</span>
							<span style="float: right;">我来回答</span>
						</p>
						<ul class="zlquest">
							<li>
								<img src="/ThinkPHP_3.2/Public/img/zp.jpg" />
								<div>
									<p class="problem">
										<span class="blue">somebody提问崔晓光:</span>
										<span class="black">提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问</span>
									</p>
									<p class="answer">
										<span class="blue">somebody提问崔晓光:</span>
										<span class="black">提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问</span>
									</p>
								</div>
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/zp.jpg" />
								<div>
									<p class="problem">
										<span class="blue">somebody提问崔晓光:</span>
										<span class="black">提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问</span>
									</p>
									<p class="answer">
										<span class="blue">somebody提问崔晓光:</span>
										<span class="black">提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问</span>
									</p>
								</div>
							</li>
							<li>
								<img src="/ThinkPHP_3.2/Public/img/zp.jpg" />
								<div>
									<p class="problem">
										<span class="blue">somebody提问崔晓光:</span>
										<span class="black">提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问</span>
									</p>
									<p class="answer">
										<span class="blue">somebody提问崔晓光:</span>
										<span class="black">提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问提问</span>
									</p>
								</div>
							</li>
						</ul>
					</div>
				
				
				
				
				</div>
			</div>
			
			<div class="zixun">
				<p class="span1"></p>
				<p class="span2">热门资讯</p>
				<p class="span3"></p>
				<p class="more">更多</p>
				<div class="zxcontent">
					<div class="left">
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<div>
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>							
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>
						</div>
					</div>
					<ul class="right">
						<li>
							<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
							<div>
								<p class="p1">
									<span class="zi">延迟退休方案年底出台<br />首批或延退3到4个月</span>
									<span>Delay retirement scheme at the end of the year the first 3 to 4 months hold back</span>
								</p>
								<p class="p2">
									按照人社部的计划，2017年将出台延迟退休方案，而2022年将正式实施延迟退休，记者获悉，延迟退休初步方案将会出台，并向社会求证意见，参与方案讨论人士
								</p>
							</div>
						</li>
						<li>
							<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
							<div>
								<p class="p1">
									<span class="zi">延迟退休方案年底出台<br />首批或延退3到4个月</span>
									<span>Delay retirement scheme at the end of the year the first 3 to 4 months hold back</span>
								</p>
								<p class="p2">
									按照人社部的计划，2017年将出台延迟退休方案，而2022年将正式实施延迟退休，记者获悉，延迟退休初步方案将会出台，并向社会求证意见，参与方案讨论人士
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="zhuanjia">
				<p class="span1"></p>
				<p class="span2">猜你感兴趣</p>
				<p class="span3"></p>
				<p class="more">换一批</p>
				<ul class="zjcontent">
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
					<li>
						<img src="/ThinkPHP_3.2/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
			
				</ul>
			</div>	
		</div>
	</div>
	
	<div class="footer">
		<div class="footerin">
			<img src="/ThinkPHP_3.2/Public/img/儒思logo--反白.png" alt="" class='logo'>
			<div class="line"></div>
			<div class="information">
				<p>公司地址</p>
				<p style='margin-bottom:21px'>ADDRESS</p>
				<p>北京市朝阳区<br/>双井优士阁大厦B座A1001室</p>
			</div>
			<div class="telemail">
				<p class='tel'>101-5861&nbsp;3231</p>
				<p class='email'>zxkf@ruthout.com</p>
			</div>
			<ul class="uls">
				<li>关于我们</li>
				<li>人才招聘</li>
				<li>专家申请</li>
				<li>联系我们</li>
				<li>意见反馈</li>
				<li>友情链接</li>
			</ul>
			<div class="together">
				<p style='font-size:14px;margin-bottom:15px;letter-spacing:1px;'>分享&nbsp;>></p>
				<hr style='height:1px;border:none;border-top:1px solid #fff;margin-bottom:4px;'/>
				<ul class="imgs">
					<li><img src="/ThinkPHP_3.2/Public/img/qq (2).png" alt=""></li>
					<li><img src="/ThinkPHP_3.2/Public/img/微信.png" alt=""></li>
					<li><img src="/ThinkPHP_3.2/Public/img/新浪.png" alt=""></li>
					<li><img src="/ThinkPHP_3.2/Public/img/腾讯微博.png" alt=""></li>
					<li><img src="/ThinkPHP_3.2/Public/img/QQ空间.png" alt=""></li>
				</ul>
				<p style='letter-spacing:1px;'>&copy;Copyright 2014儒思（北京）教育科技有限公司版权所有<br/>京ICP备14038754号</p>
			</div>
		</div>
	</div>
</body>
</html>
<script src='/ThinkPHP_3.2/Public/js/jquery-1.8.3.min.js'></script>
<script src='/ThinkPHP_3.2/Public/js/placeholder.js'></script>
<script src='/ThinkPHP_3.2/Public/js/second.js'></script>