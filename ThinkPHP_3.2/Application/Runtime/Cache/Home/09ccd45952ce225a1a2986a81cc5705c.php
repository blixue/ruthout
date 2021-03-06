<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>about</title>
	<link rel="stylesheet" href="/Public/css/public.css">
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/about.css">
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
					<li>注册</li>
					<li>马上登录│</li>
				</ul>
			</div>
			<div class="nav">
				<div class="navin">
					<img src="/Public/img/儒思logo.png" alt="" class='logo'>
					<div class="searchbox">
						<input class="searchtext" type="text" placeholder="请输入关键字"/>
						<input class="search" type="button" value="搜索"/>
					</div>
					<ul class="uls">
					<li style='color:#063391;border-bottom: 2px solid #063391;'>首页</li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li><a href="<?php echo U('Wenda/index');?>">圈子问答</a></li>
						<li><a href="<?php echo U('Doc/index');?>">资料下载</a></li>
						<li>HR需要</li>
						<li><a href="<?php echo U('News/index');?>">HR资讯</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
			
	<div class="main">
			<ul id="tab">
				<li><a href="javascript:;">关于我们</a></li>
				<li><a href="javascript:;">人才招聘</a></li>
				<li><a href="javascript:;">专家申请</a></li>
				<li><a href="javascript:;">联系我们</a></li>
				<li><a href="javascript:;">常见问题</a></li>
				<li><a href="javascript:;">意见反馈</a></li>
				<li><a href="javascript:;">友情链接</a></li>
			</ul>
			<div class="tab_content">
				<div class="content" id="content1" style="display: block;">

						<img src="/Public/img/logo.png" alt="" class="logo2"/>
						<h1>平台简介</h1>
						<p class="p_one">儒思HR平台隶属于儒思（北京）教育科技有限公司，是北京市成人教育协会人力资源开发工作委员会唯一实体单位。</p>
						<p class="p_two">平台独家设计开发了人力资源微课程，课程涵盖人力资源6大模块，52小类，系统全面、案例式教学、实操性极强、以一个维课解决一个实际问题，
							一个模块解决一个领域全面问题为特点，是点对点，以点到面的特色课程。同时设有人力资源师考证课程，由被行业内高度认可的金牌讲师讲授
							；并拥有海量高品质，有价值的专业资料，向HR答疑解惑；是为中国企业、HR提供人力资源专业交流，咨询，培训，顾问的专业平台。</p>
						<p>儒思HR平台包括手机端APP和PC端；无论你使用安卓手机还是苹果手机，你都能随时随地的实现以上功能，让HR朋友更好的利用碎片时间进行学习提升</p>	
				</div>
				<div class="content" id="content2">
					
				</div>
				<div class="content" id="content3">
					<h1>专家申请</h1>
					<div>
						<h2>擅长领域</h2>
					</div>
					<form action="">
						<ul>
							<li class="radio"><input type="radio" id="one" name="rdi"> <label for="one">人力资源</label></li>
							<li class="radio"><input type="radio" id="two" name="rdi"> <label for="two">薪酬绩效</label></li>
							<li class="radio"><input type="radio" id="three" name="rdi"> <label for="three">招聘等</label></li>
							<li class="radio"><input type="radio" id="four" name="rdi"> <label for="four">其他</label></li>
						</ul>
						<textarea name="" id="" cols="40" rows="10" placeholder="请填写您的基本情况以便于我们了解..."></textarea>
						<a href="javascript:;" class='addimage'></a>
						<b>请上传您的照片和简历</b>
						<p>最多可上传<i>5</i>个附件，大小不可超过2M</p>
						<input type="text" placeholder="请留下真实的联系方式（邮箱、QQ）,方便为我们答疑解惑!"/>
						<button>提交</button>
					</form>
				</div>
				<div class="content" id="content4">
					<div class="max_img"></div>
					<div class="info">
						<h1>联系地址</h1>
						<p>邮政邮编：100023</p>
						<p>公司地址：北京市朝阳区双井优士阁大厦B座1001室</p>
					</div>
					<div class="info">
						<h1>战略合作</h1>
						<p>市场合作: 010-5861-3231 杨老师</p>
						<p>详细资料请发至公共邮箱：market@ruthout.com</p>
					</div>
					<div class="info">
						<h1>客服中心</h1>
						<p>客服电话：010-5861-3231</p>
						<p>客服邮箱： zxkf@ruthout.com</p>
					</div>
				</div>
				<div class="content" id="content5"></div>
				<div class="content" id="content6">
					<h1>意见反馈</h1>
					<form action="">
						<ul>
							<li class="radio"><input type="radio" id="one-2" name="rdi"> <label for="one-2">内容意见</label></li>
							<li class="radio"><input type="radio" id="two-2" name="rdi"> <label for="two-2">产品意见</label></li>
							<li class="radio"><input type="radio" id="three-2" name="rdi"> <label for="three-2">技术问题</label></li>
							<li class="radio"><input type="radio" id="four-2" name="rdi"> <label for="four-2">其他</label></li>
						</ul>
						<textarea name="" id="" cols="40" rows="10" placeholder="请填写您的基本情况以便于我们了解..."></textarea>
						<a href="javascript:;" class='addimage'></a>
						<b>请上传您的照片和简历</b>
						<p>最多可上传<i>5</i>个附件，大小不可超过2M</p>
						<input type="text" placeholder="请留下真实的联系方式（邮箱、QQ）,方便为我们答疑解惑!"/>
						<p>相关页面地址：</p>
						<input type="text"/>
						<button>提交</button>
					</form>
				</div>
				<div class="content" id="content7">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
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
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script>	
	$(".main>ul[id=tab]").on("click","li",function(){
            $('#tab li').removeClass('click');
			$(this).addClass('click').children().removeClass('click');
			var index=$(this).index();
			var $content=$(".main>ul[id=tab]").next('.tab_content').children();
				$(".main>ul[id=tab]").next('.tab_content').children()
				.css("display","none");
				//console.log($content[index]);
				$content[index].style.display='block';
	});
</script>