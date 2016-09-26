<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>扫码下载</title>
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/saoma.css">
</head>
<body>
	<div class="header"><div class="blue"></div>
		<div class="login">
			<div class="loginin">
				<a href="#" class='appname'>儒思APP</a>
				<ul class="uls">
					<li><img src="/Public/img/hf/导航新浪.png" alt="" class='sina'></li>
					<li><img src="/Public/img/hf/导航微信.png" alt="" class='wechat'></li>
					<li><img src="/Public/img/hf/导航QQ.png" alt="" class='qq'></li>
					<li>注册</li>
					<li>马上登录│</li>
				</ul>
			</div>
			<div class="nav">
				<div class="navin">
					<a href="/index.php"><img src="/Public/img/hf/logo.png" alt="" class='logo'></a>
					<div class="searchbox">
						<input class="searchtext" type="text" placeholder="请输入关键字"/>
						<input class="search" type="button" value="搜索"/>
					</div>
					<ul class="uls">
						<li style='color:#063391;border-bottom: 2px solid #063391;'>首页</li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li><a href="<?php echo U('Wenda/index');?>">圈子问答</a></li>
						<li><a href="<?php echo U('Doc/index');?>">资料下载</a></li>
						<li id="need">HR需要
							<ul id='ulss'>
								<li class="bor">私人教练</li>
								<li class="bor">私人教练</li>
							</ul>
						</li>
						<li><a href="<?php echo U('News/index');?>">HR资讯</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<img src="/Public/img/saoma/扫码下载.jpg" alt="" class='img'>
		<a href="javascript:void(0);" class='upload'>点击下载</a>
		<ul class="ul">
			<li>
				<img src="/Public/img/saoma/touxiang01.png" alt="">
				<p>崔晓光</p>
				<p style='color:#bebebe'>北京市成教人力资源开发工委会理事长</p>
			</li>
			<li>
				<img src="/Public/img/saoma/touxiang02.png" alt="">
				<p>徐成响</p>
				<p style='color:#bebebe'>国家职业资格人力资源管理委员会委员</p>
			</li>
			<li>
				<img src="/Public/img/saoma/touxiang03.png" alt="">
				<p>仲理峰</p>
				<p style='color:#bebebe'>中国人民大学&nbsp;&nbsp;&nbsp;&nbsp;教授</p>
			</li>
			<li>
				<img src="/Public/img/saoma/touxiang04.png" alt="">
				<p>发现更多儒师</p>
				
			</li>
		</ul>
		<ul class="uls">
		<a href="https://appsto.re/cn/hoIj5.i">
			<li>
				<img src="/Public/img/saoma/iPone.png" alt="">
				<p>iPhone下载</p>
			</li>
			</a>
			<a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.ruthout.mapp"><li>
				<img src="/Public/img/saoma/Android.png" alt="">
				<p>安卓下载</p>
			</li></a>
			
			<li>
				<img src="/Public/img/saoma/erweima.png" alt="">
				<p>扫描二维码</p>
			</li>
			
		</ul>
	</div>
	<div class="footer">
		<div class="footerin">
			<img src="/Public/img/hf/logo_wite.png" alt="" class='logo'>
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
					<li><img src="/Public/img/hf/QQ.png" alt=""></li>
					<li><img src="/Public/img/hf/微信.png" alt=""></li>
					<li><img src="/Public/img/hf/新浪.png" alt=""></li>
					<li><img src="/Public/img/hf/腾讯微博.png" alt=""></li>
					<li><img src="/Public/img/hf/QQ空间.png" alt=""></li>
				</ul>
				<p style='letter-spacing:1px;'>&copy;Copyright 2014儒思（北京）教育科技有限公司版权所有<br/>京ICP备14038754号</p>
			</div>
		</div>
	</div>
</body>
</html>
<script src='/Public/js/jquery-1.8.3.min.js'></script>
<script src='/Public/js/placeholder.js'></script>
<script>
	$('#need').click(function(){
			$("#ulss").toggle();	
	})
</script>
<script>
	$('.upload').click(function(){
		$(window).scrollTop(3356);
	});
</script>