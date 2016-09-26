<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>私人教练</title>
	<link rel="stylesheet" href="/Public/css/hf.css">
	<link rel="stylesheet" href="/Public/css/sirenjiaolian.css">
</head>
<body>
	<div class="ding">
		<ul class="uu">
			<li>QQ在线客服</li>
			<li><img src="/Public/img/zhuanjia/QQ.png" alt="" style='margin-right:1%;'>儒思李老师</li>
			<li><img src="/Public/img/zhuanjia/QQ.png" alt="" style='margin-right:1%;'>儒思王老师</li>
			<li>留言我们</li>
			<li style='border-bottom:none;'><img src="/Public/img/zhuanjia/邮箱.png" alt=""></li>
		</ul>
	</div>
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
						<li ><a href="<?php echo U('Coach/index');?>">首页</a></li>
						<li><a href="<?php echo U('Course/index');?>">HR微课</a></li>
						<li><a href="<?php echo U('Wenda/index');?>">圈子问答</a></li>
						<li><a href="<?php echo U('Doc/index');?>">资料下载</a></li>
						<li id="need">HR需要
							<ul id='ulss'>
								<li class="bor" style='color:#063391;border-bottom: 2px solid #063391;'>私人教练</li>
								<a href="<?php echo U('Shop/index');?>"><li class="bor">服务商城</li></a>
							</ul>
						</li>
						<li><a href="<?php echo U('News/index');?>">HR资讯</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="banner">
			<div class="bannerimg">
				<img src="/Public/img/tiwenye/banner.png" alt="">
				<p class='title'>首页>HR商城>私人教练</p>
			</div>
		</div>
		<div class="content">

			<div class="left">
				<div class="nav">
					<div class="title">推荐私教</div>
				</div>
				<a href="" class='left1'><img src="/Public/img/zhuanjia/图层-18.png" alt=""></a>
				<a href="" class='right1'><img src="/Public/img/zhuanjia/图层-18-拷贝.png" alt=""></a>
				<ul class="uls">
					<li>
						
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='img'>
						<p class='name' style='margin-top:5px;'>崔晓光</p>
						<p class='title' style='color:#959595;'>北京市成教学会人...</p>
						<div>
							<p class='one'>擅长课程管理：人力资源规划、招聘与配置...</p>
							<p class='two'>评价(综合):5.0分</p>
							<a href="" class='yuyue'>预约</a>
						</div>
					</li>
					<li>
						<div>
							<p class='one'>擅长课程管理：人力资源规划、招聘与配置...</p>
							<p class='two'>评价(综合):5.0分</p>
							<a href="" class='yuyue'>预约</a>
						</div>
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='img'>
						<p class='name' style='margin-top:5px;'>崔晓光</p>
						<p class='title' style='color:#959595;'>北京市成教学会人...</p>
					</li>
					<li>
						<div>
							<p class='one'>擅长课程管理：人力资源规划、招聘与配置...</p>
							<p class='two'>评价(综合):5.0分</p>
							<a href="" class='yuyue'>预约</a>
						</div>
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='img'>
						<p class='name' style='margin-top:5px;'>崔晓光</p>
						<p class='title' style='color:#959595;'>北京市成教学会人...</p>
					</li>
					<li>
						<div>
							<p class='one'>擅长课程管理：人力资源规划、招聘与配置...</p>
							<p class='two'>评价(综合):5.0分</p>
							<a href="" class='yuyue'>预约</a>
						</div>
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='img'>
						<p class='name' style='margin-top:5px;'>崔晓光</p>
						<p class='title' style='color:#959595;'>北京市成教学会人...</p>
					</li>
				</ul>
				<div class="nav" style='margin-bottom:15px;'>
					<div class="title">儒思全部专家</div>
				</div>
				<div class="kind">
				<p class='fen' style='width:70px;'>分类:</p>
					<ul class="ulls">
						<li style='background: #00DA86;color:#fff;width:35px;height:20px;'>不限</li>
						<li>人力资源规划</li>
						<li>招聘配置</li>
						<li>培训开发</li>
						<li>薪酬福利</li>
						<li>绩效管理</li>
						<li>员工关系</li>
					</ul>
				</div>
				<div class="kind">
				<p class='fen'>上课方式:</p>
					<ul class="ulls">
						<li style='background: #00DA86;color:#fff;width:35px;height:20px;'>不限</li>
						<li>QQ</li>
						<li>SKYPE</li>
						<li>线下见面</li>
					</ul>
				</div>
				<div class="kind">
				<p class='fen'>上课时间:</p>
					<ul class="ulls">
						<li style='background: #00DA86;color:#fff;width:35px;height:20px;'>不限</li>
						<li>周一</li>
						<li>周二</li>
						<li>周三</li>
						<li>周四</li>
						<li>周五</li>
						<li>周六</li>
						<li>周日</li>
					</ul>
				</div>
				<div class="kind">
				<p class='fen'>本月私教:</p>
					<ul class="ulls">
						<li style='background: #00DA86;color:#fff;width:35px;height:20px;'>不限</li>
						<li>本月可约</li>
					</ul>
				</div>
				<div class="kind" style='margin-top:10px;'>
				<p class='fen'>排序方式:</p>
					<ul class="ulls">
						<li style='background: #00DA86;color:#fff;width:35px;height:20px;'>不限</li>
						<li>默认排序</li>
						<li>评分</li>
						<li>价格</li>
						<li>评论数</li>
					</ul>
				</div>
				<ul class="ull">
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
			</ul>
			<ul class="ull">
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
			</ul>
			<ul class="ull">
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
			</ul>
			<ul class="ull">
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="/Public/img/zhuanjia/销售部门绩效-拷贝-4.png" alt="" class='img'></dt>
						<dd>
							<p class="name">崔晓光</p>	
							<p class="infor"><span>26人已约过</span></p>
							<p class="huoyue">评分（综合）：<span>5.0</span>分</p>
							<p class="huifu"><span>1￥3000/12课时</span></p>
							<p class="like" style='font-size:12px;'>北京市成教学会人力资源年开发工委...</p>
							<p class="like"  style='font-size:12px;'>擅长领域：人力资源管理师，信息系统...</p>
							<a href="" class='ask'>预约</a>
						</dd>
					</dl>
				</li>
			</ul>
			
			</div>
			<div class="rightone">
				<div class="nav">
					<div class="title">课程教师</div>
				</div>
				<ul class="ulss">
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
					<li style='border-bottom:none'>
						1.&nbsp;&nbsp;人力资源管理与规划
						<img src="/Public/img/zhuanjia/销售部门绩效.png" alt="" class='right1'>
					</li>
				</ul>
				</div>
			<div class="righttwo">
				<div class="nav">
					<div class="title">专家问答</div>
				</div>
				<ul class="ulss">
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li>老师，请问哪里可以下载北京各项法律...</li>
					<li style='border-bottom:none'>老师，请问哪里可以下载北京各项法律...</li>
				</ul>
			</div>
			</div>
		</div>
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
	$('.uls li').hover(function(){
		$(this).addClass('zhe');
	},function(){
		$(this).removeClass('zhe');
	});
</script>