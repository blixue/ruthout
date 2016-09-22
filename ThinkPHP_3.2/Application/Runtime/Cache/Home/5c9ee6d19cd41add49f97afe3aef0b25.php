<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录-儒斯微视频</title>
		<link rel="stylesheet" href="/Public/css/commen.css" />
		<link rel="stylesheet" href="/Public/css/login.css" />
	</head>
	<body>
		<div class="main">
			<a href="<?php echo U('Index/index');?>"><div class="logo"></div></a>
			<form action="/index.php/Home/User/login" id="login" method="post" onsubmit="return check()">
				<h1>登陆</h1>
				<input type="text" id="account" class="txt" name="account" placeholder="请输入您的账号" onblur="check_account();"/>
				<i id="name"></i>
				<input type="text" id="psd" class="txt" name="password" placeholder="请输入您的密码" onblur="check_password();"/>
				<i id="pwd"></i>
				<div id="box_one">
					<i id='s'></i>
					<i id='e'></i>
					<button type="submit">登陆</button>
					<p>
						<input type="checkbox" name="auto" class="chbox" id="chbox" checked='1'/>
						<label for="chbox">记住密码</label>
					</p>
				</div>
				<p><b>找回密码</b> | 还没有注册账号？<a href="/index.php/Home/User/register_y">立即注册</a></p>
				<i>-----其他登陆方式-----</i>
				<div id="box_two">
					<a href=""><img src="/Public/img/weixin.png" alt="" /></a>
					<a href=""><img src="/Public/img/QQ.png" alt="" /></a>
					<a href=""><img src="/Public/img/weibo.png" alt="" /></a>
				</div>
			</form>
		</div>
	</body>
</html>
<script src='/Public/js/jquery-1.8.3.min.js'></script>
<script src='/Public/js/placeholder.js'></script>
<script>
	var FlagAcc = false;
	var FlagPwd = false;
	var FlagLog = false;
	function check()
	{
		if(!check_account())
		{
			check_account();
			return false;
		}

		if(!check_password())
		{
			check_password();
			return false;
		}

//		function login(){
//			var account = $('#account').val();
//			var password = $('#psd').val();
//			var url = "<?php echo U('User/login');?>";
//			$.post(url,{account:account,password:password},function(data){
//				alert(data)
//				if(data==1){
//					document.getElementById('s').innerHTML = success_message;
//
//				}else{
//					document.getElementById('e').innerHTML = error_message;
//
//				}
//			})
//
//		}

	}
	//验证account
	function check_account()
	{
		var account = $.trim($("#account").val());
		//alert(email)
		if(account=="")
		{
			//layer.msg("邮箱不能为空,请输入!");
			document.getElementById('name').innerHTML = account_message;
			return FlagAcc;
		}else{
			document.getElementById('name').innerHTML = '';
			FlagAcc =  true;
			return FlagAcc;
		}
		return FlagAcc;
	}
	//验证password
	function check_password()
	{
		var password = $.trim($("#psd").val());
		if(password=="")
		{
			//layer.msg("邮箱不能为空,请输入!");
			document.getElementById('pwd').innerHTML = password_message;
			return FlagPwd;
		}else{
			document.getElementById('pwd').innerHTML = '';
			FlagPwd = true;
			return FlagPwd;
		}
		return FlagPwd;
	}

	var account_message = "<span style='COLOR:#ff0000'> × 请输入账号!</span>";
	var password_message = "<span style='COLOR:#ff0000'> × 请输入密码!</span>";
	var success_message = "<span style='COLOR:#ff0000'> × 登录成功!</span>";
	var error_message = "<span style='COLOR:#ff0000'> × 账号或密码错误!</span>";
</script>