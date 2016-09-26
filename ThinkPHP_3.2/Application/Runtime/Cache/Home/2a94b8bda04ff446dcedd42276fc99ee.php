<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="/Public/css/public.css">
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/second.css">
	<link rel="stylesheet" href="/Public/css/index.css">
</head>
<body>
	<div class="header">
		<div class="blue"></div>
		<div class="login">
			<div class="loginin">
				<a href="/index.php/Home/Index/saoma" class='appname'>儒思APP</a>
				<ul class="uls">
					<li><img src="/Public/img/导航新浪.png" alt="" class='sina'></li>
					<li><img src="/Public/img/导航微信.png" alt="" class='wechat'></li>
					<li><a href="<?php echo U('User/login_qq?type=qq');?>"><img src="/Public/img/导航QQ.png" alt="" class='qq'></a></li>
					<?php if(empty($data)): ?><li style="color:#ffffff"><a href="<?php echo U('User/register_y');?>">注册</a></li>
						<li><a href="<?php echo U('User/login_y');?>">马上登录│</a></li>
						<?php else: ?>
						<li><a href="<?php echo U('User/logout');?>">退出登录</a></li>
						<li><a href='#'>欢迎 <?php echo ($data); ?>|</a></li><?php endif; ?>
				</ul>
			</div>
			<div class="nav">
				<div class="navin">
					<a href="/index.php"><img src="/Public/img/儒思logo.png" alt="" class='logo'></a>
					<div class="searchbox">
						<input class="searchtext" type="text" id="search_val" placeholder="请输入关键字"/>
						<input class="search" type="button" id="search" value="搜索"/>
						<span id='sea'></span>
					</div>
					<ul class="uls">
						<li style='color:#063391;border-bottom: 2px solid #063391;'>首页</li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li><a href="<?php echo U('Wenda/index');?>">圈子问答</a></li>
						<li><a href="<?php echo U('Doc/index');?>">资料下载</a></li>
						<li id="need">HR需要
							<ul id='ulss'>
								<a href="<?php echo U('Coach/coach');?>"><li class="bor">私人教练</li></a>
								<a href="<?php echo U('Shop/shop');?>"><li class="bor">服务商城</li></a>
							</ul>
						</li>
						<li><a href="<?php echo U('News/index');?>">HR资讯</a></li>
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
					<p style="width:160px; text-align:right;padding-right:30px;font-size: 26px; margin-top:60px; color: #Fff; background:url(/img/mor.png) no-repeat center right">儒思精选</p>

				</li>
				<li>
					<div><img src="/Public/img/sj.png" /><span></span></div>
					<p>一对一解答专业问题</p>
				</li>
				<li>
					<div><img src="/Public/img/fl.png" /><span></span></div>
					<p>一对一解答专业问题</p>
				</li>
				<li>
					<div><img src="/Public/img/zj.png" /><span></span></div>
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
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
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
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>HTML5移动WebAPPAPP阅读器</p>
							<p>
								<span class="red">Y198.00</span>
								<span style="color: #9a9a9a">974人在学</span>
							</p>
						</div>		
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
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
							<?php if(is_array($doc)): $i = 0; $__LIST__ = $doc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<img src="/Public/img/word.png" />
									<div>
										<p><?php echo ($vo["file_name"]); ?></p>
										<span>免费下载</span>
										<span>已下载<?php echo ($vo["download_count"]); ?>次</span>
									</div>
									<a href="">下载</a><img src="/Public/img/111.png" />
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					
					<div class="right">
						<p>
							<span style="float: left;">热门问答</span>
							<span style="float: right;">我来回答</span>
						</p>
						<ul class="zlquest">
							<li>
								<img src="/Public/img/zp.jpg" />
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
								<img src="/Public/img/zp.jpg" />
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
								<img src="/Public/img/zp.jpg" />
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
						<img src="/Public/img/img1.jpg" />
						<div>
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>							
							<p>延迟退休方案年底出台&nbsp;首批或延迟3到4个月</p>
						</div>
					</div>
					<ul class="right">
						<li>
							<img src="/Public/img/img1.jpg" />
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
							<img src="/Public/img/img1.jpg" />
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
						<img src="/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
					<li>
						<img src="/Public/img/img1.jpg" />
						<p>你还有</p>
						<span>介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</span>
					</li>
			
				</ul>
			</div>	
		</div>
	</div>
	
	<div class="footer">
		<div class="footerin">
			<img src="/Public/img/儒思logo--反白.png" alt="" class='logo'>
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
				<li><a href="/index.php/Home/Index/about">关于我们</a></li>
				<li><a href="/index.php/Home/Index/about">人才招聘</a></li>
				<li><a href="/index.php/Home/Index/about">专家申请</a></li>
				<li><a href="/index.php/Home/Index/about">联系我们</a></li>
				<li><a href="/index.php/Home/Index/about">意见反馈</a></li>
				<li><a href="/index.php/Home/Index/about">友情链接</a></li>
			</ul>
			<div class="together">
				<p style='font-size:14px;margin-bottom:15px;letter-spacing:1px;'>分享&nbsp;>>	</p>
				<hr style='height:1px;border:none;border-top:1px solid #fff;margin-bottom:4px;'/>
				<ul class="imgs">
					<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
				</ul>

				<p style='letter-spacing:1px;'>&copy;Copyright 2014儒思（北京）教育科技有限公司版权所有<br/>京ICP备14038754号</p>
			</div>
		</div>
	</div>
</body>
</html>
<script src='/Public/js/jquery-1.8.3.min.js'></script>
<script src='/Public/js/placeholder.js'></script>
<script src='/Public/js/second.js'></script>
<script>
	$('#need').click(function(){
			$("#ulss").toggle();	
	})
</script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

<!--搜索-->
<script>
	$(function(){
		$("#need").hover(
				function (){
					$("#ulss").show();
				}
		)

		$('#search').click(function(){
			var search_val = $('#search_val').val()
			var url ="/index.php/Home/Index/search";
			$.post(url,{search_val:search_val},function(msg){
					if (msg==0)
					{
						document.getElementById('sea').innerHTML="<font color=red>无搜索结果</font>";
					}
			})
		})
	})
</script>