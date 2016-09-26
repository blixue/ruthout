<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" id="aa">
<head>
	<meta charset="UTF-8">
	<title>精品资料</title>
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/jingpinziliao.css">
	<style>
		/**
		分页按钮的样式
		**/
		.a{
			color:#fff;
			background-color:#00DA86;
			width:70px;
			height:20px;
		}
		.up{
			border:1px solid #e5e5e5;
			border-radius:5px;
			padding:0 6px;
			margin:0 5px;
		}
		.current{
			border:1px solid #e5e5e5;
			border-radius:5px;
			padding:0 10px;
			color:#fff;
			background:#00da84;
			margin:0 5px;
		}

	</style>
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
					<?php if(empty($data)): ?><li style="color:#ffffff"><a href="<?php echo U('User/regist_y');?>">注册</a></li>
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
						<li style='color:#063391;border-bottom: 2px solid #063391;'>资料下载</li>
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
		<img src="/Public/img/shangchuanwendang/banner00.png" alt="" class='img'>
		<ul class="uls">
			<li style='background-color:#21b2f5;'>
				<img src="/Public/img/shangchuanwendang/人力资源规划.png" alt="" style='margin-top:5px;'>
				<p style='margin-top:5px;'>人力资源规划</p>
			</li>
			<li style='background-color:#f9644e;'>
				<img src="/Public/img/shangchuanwendang/招聘与配置.png" alt="" style='margin-top:5px;'>
				<p style='margin-top:5px;'>招聘与配置</p>
			</li>
			<li style='background-color:#9a7ff4;'>
				<img src="/Public/img/shangchuanwendang/培训与开发.png" alt="" style='margin-top:5px;'>
				<p style='margin-top:5px;'>培训与开发</p>
			</li>
			<li style='background-color:#a4ca39;'>
				<img src="/Public/img/shangchuanwendang/薪酬管理.png" alt="" style='margin-top:5px;'>
				<p style='margin-top:5px;'>薪酬管理</p>
			</li>
			<li style='background-color:#356de6;'>
				<img src="/Public/img/shangchuanwendang/绩效管理.png" alt="" style='margin-top:5px;'>
				<p style='margin-top:5px;'>绩效管理</p>
			</li>
			<li style='background-color:#22c687;'>
				<img src="/Public/img/shangchuanwendang/员工关系管理.png" alt="" style='margin-top:5px;'>
				<p style='margin-top:5px;'>员工关系管理</p>
			</li>
		</ul>
		<div class="left" >
			<div class="nav">
				<p class='fen'>排序:</p>
				<ul class="ulls">
					<li id="download_count" value="1">下载量</li>
				    <li id="create_time" value="2">发布日期</li>
					<li id="bean" value="3">所需积分</li>
				</ul>
			</div>
			<ul class="ll">
				<div id='pages'>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li >
					<img src="/Public/img/shangchuanwendang/word.png" alt="" class='llimg'>
					<p style='padding-top:15px;'><?php echo ($vo["file_name"]); ?></p>
					<p style='color:#a1a1a1;'>崔晓光&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;&nbsp;&nbsp;18:42</p>
					<span class='done'>已下载<span><?php echo ($vo["download_count"]); ?></span>次</span>
					<span class='free'>免费</span>
					<a href="" class='down'>下载<img src="/Public/img/shangchuanwendang/下载下载.png" alt=""></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
				<div align="center"><?php echo ($page); ?></div>
				</div>
			</ul>
		</div>
		<div class="rightone">
			<a href="/index.php/Home/Doc/upload">我要上传资料</a>
		</div>
		<div class="righttwo">
			<input type="text" placeholder='根据关键字搜素资料'  class='text'>
			<input type="button" class='button' value='搜索'>
		</div>
		<div class="rightthree">
			<div class="nav">
				<div class="title">热门推荐</div>
			</div>
			<ul class="ulss">
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
				<li style='border-bottom:none'>
					<img src="/Public/img/shangchuanwendang/word01.png" alt="" class='left1'>
					人力资源管理与规划
					<img src="/Public/img/weike1/wuxing.png" alt="" class='right1'>
				</li>
			</ul>
		</div>
		<div class="rightfour">
			<div class="nav">
				<div class="title">专家问答</div>
			</div>
			<ul class="ull">
				<li>
					<img src="/Public/img/shangchuanwendang/问.png" alt="" class='left1'>
					老师，请问在哪里下载北京各项法律...
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/问.png" alt="" class='left1'>
					老师，请问在哪里下载北京各项法律...
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/问.png" alt="" class='left1'>
					老师，请问在哪里下载北京各项法律...
				</li>
				<li>
					<img src="/Public/img/shangchuanwendang/问.png" alt="" class='left1'>
					老师，请问在哪里下载北京各项法律...
				</li>
				<li style='border-bottom:none'>
					<img src="/Public/img/shangchuanwendang/问.png" alt="" class='left1'>
					老师，请问在哪里下载北京各项法律...
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
				<li><a href="/index.php/Home/Doc/about">关于我们</a></li>
				<li><a href="/index.php/Home/Doc/about">人才招聘</a></li>
				<li><a href="/index.php/Home/Doc/about">专家申请</a></li>
				<li><a href="/index.php/Home/Doc/about">联系我们</a></li>
				<li><a href="/index.php/Home/Doc/about">意见反馈</a></li>
				<li><a href="/index.php/Home/Doc/about">友情链接</a></li>
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
<script type="text/javascript">
	function pages(id){
		var id = id;
		var url = "/index.php/Home/Doc/pages_index";
		$.get(url, {'p':id}, function(data){
			//alert(data)
			$("#pages").replaceWith("<div id='pages'>"+data+"</div>");
		});
	}
	$('.ulls li').click(function(){
		$(this).addClass('a');
		$(this).siblings().removeAttr('class');

		var download_count =$('#download_count').val();
		var create_time =$('#create_time').val();
		var bean =$('#bean').val();
		var url = "/index.php/Home/Doc/pages_index";
		$.post(url,{download_count:download_count,create_time:create_time,bean:bean},function(data){
			//alert(data)
			if(data){
				$("#pages").replaceWith("<div id='pages'>"+data+"</div>");
			}else{
				alert(无结果)
			}

		})
	});

</script>