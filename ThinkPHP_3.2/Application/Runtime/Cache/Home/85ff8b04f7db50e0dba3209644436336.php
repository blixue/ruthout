<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>问答</title>
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/wenda.css">
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
					<?php if(empty($data)): ?><li style="color:#ffffff"><a href="<?php echo U('User/register_y');?>">注册</a></li>
						<li><a href="<?php echo U('User/login_y');?>">马上登录│</a></li>
						<?php else: ?>
						<li><a href="<?php echo U('User/logout');?>">退出登录</a></li>
						<li><a href='#'>欢迎 <?php echo ($data); ?>|</a></li><?php endif; ?>
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
						<li><a href="<?php echo U('Index/index');?>">首页</a></li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li style='color:#063391;border-bottom: 2px solid #063391;'>圈子问答</li>
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
		<img src="/Public/img/tiwenye/banner.png" alt="">
		<div class="leftone">
			<input type="text" class='text' placeholder='在此提问，将有344名专家为你解答'>
			<a href="/index.php/Home/Wenda/tiwen"><input type="button" class='button' value='我要提问'></a>
		</div>
		<div class="lefttwo">
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
		</div>
		<div class="leftthree">
			<p>回复234234条&nbsp;&nbsp;今日&nbsp;&nbsp; 44条  &nbsp;&nbsp;<span class='green'>最新</span>&nbsp;&nbsp;│&nbsp;&nbsp;最热&nbsp;&nbsp;│&nbsp;&nbsp;未解决&nbsp;&nbsp;│&nbsp;&nbsp;已解决&nbsp;&nbsp;│与我相关&nbsp;&nbsp;<span class='back'>阅读/回复</span><span class='last'>最后回复</span></p>
		</div>
		<div class="leftfour">
			<ul class="uls">
				<a href="/index.php/Home/Wenda/content"><li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li></a>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
				<li><span>432/0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;18:42</span>如何提高招聘效率</li>
			</ul>
		</div>
		<div class="rightone">
			<img src="/Public/img/renliquzheng/销售部门绩效.png" alt="" class='img'>
			<p style='text-align:center'>崔晓光</p>
			<ul class="uls">
				<li>
					<p style='color:#073394;'>21</p>
					<p>已回答</p>
				</li>
				<li>
					<p style='color:#de231c;'>45</p>
					<p>需回答</p>
				</li>
				<li>
					<p style='color:#de231c;'>205</p>
					<p>未回答</p>
				</li>
			</ul>
		</div>
		<div class="righttwo">
			<img src="/Public/img/wentichakan/儒思.png" alt="">
		</div>
		<div class="rightthree">
			<div class="nav">
				<div class="title">最新学员</div>
			</div>
			<ul class="uls">
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
				<li style='border-bottom:none;'>
					<img src="/Public/img/weike1/shoucang.png" alt="" class='img'>
					<p><span class='right'>已回答<span class='red'>1125</span>条</span>1. <span class='name'>fadfa</span></p>
				</li>
			</ul>
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
				<li><a href="/index.php/Home/Wenda/about">关于我们</a></li>
				<li><a href="/index.php/Home/Wenda/about">人才招聘</a></li>
				<li><a href="/index.php/Home/Wenda/about">专家申请</a></li>
				<li><a href="/index.php/Home/Wenda/about">联系我们</a></li>
				<li><a href="/index.php/Home/Wenda/about">意见反馈</a></li>
				<li><a href="/index.php/Home/Wenda/about">友情链接</a></li>
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
<script>
	$('#need').click(function(){
			$("#ulss").toggle();	
	})
</script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>