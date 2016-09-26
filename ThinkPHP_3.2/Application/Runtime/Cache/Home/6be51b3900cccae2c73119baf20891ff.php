<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>about</title>
	<link rel="stylesheet" href="/Public/css/public.css">
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/infomation.css">
</head>
<body>
	<div class="header">
		<div class="login">
			<div class="loginin">
				<a href="#" class='appname'>儒思APP</a>
				<ul class="uls">
					<li><img src="/Public/img/导航新浪.png" alt="" class='sina'></li>
					<li><img src="/Public/img/导航微信.png" alt="" class='wechat'></li>
					<li><img src="/Public/img/导航QQ.png" alt="" class='qq'></li>
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
						<li><a href="<?php echo U('Wenda/index');?>">圈子问答</a></li>
						<li><a href="<?php echo U('Doc/index');?>">资料下载</a></li>
							<li id="need">HR需要
							<ul id='ulss'>
								<li class="bor">私人教练</li>
								<li class="bor">私人教练</li>
							</ul>
						</li>
						<li  style='color:#063391;border-bottom: 2px solid #063391;'>HR资讯</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
			
	<div class="main">
		<b>首页  > 资讯</b>
		<b>热门资讯： <a href="#">薪资</a><a href="#">薪资</a><a href="#">薪资</a><a href="#">薪资</a>
			<a href="#">薪资</a><a href="#">薪资薪资</a>
		</b>
		<div id="img">
			<div class="img1">
				<a href="/index.php/Home/News/show"><p>再见我的爱再见的的清穿再见的你就爱尔康情况的好的时代</p></a>
			</div>
			<div class="img2"> 
				<div class="img2-1">
					<p>再见我的爱再见的的清穿再见的你就爱尔康情况的好的时代</p>
				</div>
				<div class="img2-2">
					<p>再见我的爱再见的的清穿再见的你就爱尔康情况的好的时代</p>
				</div>
			</div>
			<div class="img3">
				<img src="/Public/img/儒思内部活动广告位.png" alt="" />
			</div>
		</div>
		
		<div class="left">
			<ul>
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>			
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>
				<li>
					<div class="pic">
						<img src="/Public/img/bank_03.gif" alt="" />
					</div>
					<div class="word">
						<h1>在我的天空打败了我的翅膀<span>薪资</span></h1>
						<p>在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我的天空你在还是打不恻然在我
						不恻然在我的天空<a href="#">更多 >></a></p>
						<div>
							<i class="one">2016/08/19</i>
							<i class="two">阅读（222）</i>
							<i class="three">评论（0）</i>
							<i class="four">收藏（456）</i>
						</div>
					</div>
					<div class="bot clear">
					</div>
				</li>
			</ul>
			<p id="load">点击加载更多...</p>
		</div>
		<div class="right">
				<h1>热门资讯</h1>
				<ul>
					<li>
						<img src="/Public/img/bank_03.gif" alt="" />
						<p>灵魂加速下坠梦吹来威风案件你玩吧你的心灵</p>
					</li>
					<li>
						<img src="/Public/img/bank_03.gif" alt="" />
						<p>灵魂加速下坠梦吹来威风案件你玩吧你的心灵</p>
					</li>
					<li>
						<img src="/Public/img/bank_03.gif" alt="" />
						<p>灵魂加速下坠梦吹来威风案件你玩吧你的心灵</p>
					</li>
					<li>
						<img src="/Public/img/bank_03.gif" alt="" />
						<p>灵魂加速下坠梦吹来威风案件你玩吧你的心灵</p>
					</li>
					<li>
						<img src="/Public/img/bank_03.gif" alt="" />
						<p>灵魂加速下坠梦吹来威风案件你玩吧你的心灵</p>
					</li>
				</ul>
		</div>
		<div class="clear"></div>
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
				<li><a href="/index.php/Home/News/about">关于我们</a></li>
				<li><a href="/index.php/Home/News/about">人才招聘</a></li>
				<li><a href="/index.php/Home/News/about">专家申请</a></li>
				<li><a href="/index.php/Home/News/about">联系我们</a></li>
				<li><a href="/index.php/Home/News/about">意见反馈</a></li>
				<li><a href="/index.php/Home/News/about">友情链接</a></li>
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