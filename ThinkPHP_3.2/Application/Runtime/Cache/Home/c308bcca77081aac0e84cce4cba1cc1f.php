<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提问</title>
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/tiweye.css">
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
					<img src="/Public/img/hf/儒思logo.png" alt="" class='logo'>
					<div class="searchbox">
						<input class="searchtext" type="text" placeholder="请输入关键字"/>
						<input class="search" type="button" value="搜索"/>
					</div>
					<ul class="uls">
						<li><a href="<?php echo U('Index/index');?>">首页</a></li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li style='color:#063391;border-bottom: 2px solid #063391;'>圈子问答</li>
						<li><a href="<?php echo U('Doc/index');?>">资料下载</a></li>
						<li>HR需要</li>
						<li><a href="<?php echo U('News/index');?>">HR资讯</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="bannerout">
			<div class="banner">
				<img src="/Public/img/tiwenye/banner.png" alt="">
				<ul class="uls">
					<li style="background:url('/Public/img/tiwenye/矩形-5.png') no-repeat 100%">提问</li>
					<li style="background:url('/Public/img/tiwenye/矩形-5-拷贝-2.png') no-repeat 100%">选择专家</li>
					<li style="background:url('/Public/img/tiwenye/矩形-5-拷贝-2.png') no-repeat 100%" >发布</li>
				</ul>
			</div>
		</div>
		<div class="get">
			<div class="nav">
				<div class="title">发表提问</div>
			</div>
			<p class='fen'>分类:</p>
			<ul class="uls">
				<li style='background: #00DA86;color:#fff;width:35px;height:20px;'>不限</li>
				<li>人力资源规划</li>
				<li>招聘配置</li>
				<li>培训开发</li>
				<li>薪酬福利</li>
				<li>绩效管理</li>
				<li>员工关系</li>
				<li>高效沟通</li>
				<li>薪酬设计方法</li>
				<li>员工关系</li>
				<li>股权激励</li>
			</ul>
			<div class="input">
				<div contenteditable='true' class='textarea'></div>
			</div>
			<a href="/index.php/Home/Wenda/zhuanjia" class='ask' style='margin-left:50%'>问专家</a><a href="" class='ask' style='margin-left:20px;'>直接发布</a><a href="/index.php/Home/Wenda/index" class='red' style='margin-left:20px;'>没有想好，下次再问吧</a>
		</div>
	</div>
	<div class="footer">
		<div class="footerin">
			<img src="/Public/img/hf/儒思logo--反白.png" alt="" class='logo'>
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