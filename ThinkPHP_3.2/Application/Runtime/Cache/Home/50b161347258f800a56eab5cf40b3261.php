<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传文档</title>
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/shangchuanwendang.css">
</head>
<body>
	<div class="header">
		<div class="blue"></div>
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
					<img src="/Public/img/hf/logo.png" alt="" class='logo'>
					<div class="searchbox">
						<input class="searchtext" type="text" placeholder="请输入关键字"/>
						<input class="search" type="button" value="搜索"/>
					</div>
					<ul class="uls">
						<li><a href="<?php echo U('Index/index');?>">首页</a></li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li><a href="<?php echo U('Wenda/index');?>">圈子问答</a></li>
						<li style='color:#063391;border-bottom: 2px solid #063391;'>资料下载</li>
						<li>HR需要</li>
						<li>HR资讯</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<p class='title'><a href="<?php echo U('Index/index');?>">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/index.php/Home/Doc/index">资料下载</a>&nbsp;&nbsp;>&nbsp;&nbsp;上传资料</p>
		<div class="nav">
			<div class="title">上传资料</div>
		</div>
		<div class="get">
			<a href="/index.php/Home/Doc/ups" class='up'>上传我的资料</a>
			<p class='word'>每成功上传一份资料，可获得<span>5</span>积分奖励</p>
		</div>
		<p class="yaoqiu" style='color:#000;'>上传资料说明</p>
		<p class="yaoqiu">1、上传的资料需要通过审核后才发布</p>
		<p class="yaoqiu">2、支持5M以内的资料文件上传</p>
		<p class="yaoqiu">3、请勿在未经授权的情况下上传任何涉及版权侵权的文档，除非文档完全由您个人创作或您得到了版权所有者的授权</p>
		<p class="yaoqiu">4、为了保证文档能正常显示，我们支持以下格式的文档上传</p>
		<p class='geshi'>MS&nbsp;&nbsp;office文档<img src="/Public/img/shangchuanwendang/doc-docx.png" alt="" class='img'>.doc;.docx<img src="/Public/img/shangchuanwendang/ppt-pptx.png" alt="" class='img'>.ppt;.pptx<img src="/Public/img/shangchuanwendang/xls-xlsx.png" alt="" class='img'>.xls;.xlsx<img src="/Public/img/shangchuanwendang/PDF.png" alt="" class='img'>PDF</p>
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