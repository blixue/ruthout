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
						<li><a href="<?php echo U('News/index');?>">HR资讯</a></li>
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

		<label class="control-label" > </label>
		<input type="file" style="display:none" name="userfile">
		<input type="hidden" id="newbikephotoName" name="bike_photo" value="" />
		<input type="hidden" id="oldbikephotoName" value="" />
		<div class="controls" style="text-align:left;">
			<img  id="newbikephoto" src="/ajaxup/Public/images/nophoto.jpg" style="max-height:200px;" />
			<span class="help-inline"></span>
			<br>
			<div id="uploadphotoconfirm"></div>
			<br>
			<input type="button" class="btn btn-primary" id="upload_button"  value="上传图片" /><br/>
			<span class="help-inline">*请上传格式为.png .jpg .jpeg 的图片</span>
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
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script src="/Public/js/ajaxupload.js"></script>
<script>
	$(function(){
		var button = $('#upload_button'),interval;
		var confirmdiv = $('#uploadphotoconfirm');
		var fileType = "pic",fileNum = "one";
		new AjaxUpload(button,{
			action: "<?php echo U('Index/uppic');?>",
			name: 'userfile',
			onSubmit : function(file, ext){
				if(fileType == "pic")
				{
					if (ext && /^(jpg|png|jpeg|gif|JPG)$/.test(ext)){
						this.setData({
							'info': '文件类型为图片'
						});
					} else {
						confirmdiv.text('文件格式错误，请上传格式为.png .jpg .jpeg 的图片');
						return false;
					}
				}

				confirmdiv.text('文件上传中');

				if(fileNum == 'one')
					this.disable();

				interval = window.setInterval(function(){
					var text = confirmdiv.text();
					if (text.length < 14){
						confirmdiv.text(text + '.');
					} else {
						confirmdiv.text('文件上传中');
					}
				}, 200);
			},
			onComplete: function(file, response){
				if(response != "success"){
					if(response =='2'){
						confirmdiv.text("文件格式错误，请上传格式为.png .jpg .jpeg 的图片");
					}else{
						if(response.length>20){
							confirmdiv.text("文件上传失败请重新上传"+response);
						}else{
							confirmdiv.text("上传完成");
							$("#newbikephotoName").val("/ajaxup/upload/images/"+response);
							$("#newbikephoto").attr("src","/ajaxup/upload/images/"+response);
						}
					}

				}

				window.clearInterval(interval);

				this.enable();

				if(response == "success")
					alert('上传成功');
			}
		});
	});

</script>