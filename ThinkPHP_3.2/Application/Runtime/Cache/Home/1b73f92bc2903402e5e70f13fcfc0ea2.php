<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/Public/css/commen.css" />
	<link rel="stylesheet" href="/Public/css/regist.css" />
</head>
<body>
<div class="main">
	<a href="<?php echo U('Index/index');?>"><div class="logo"></div></a>
	<form  id="regist" action="<?php echo U('User/regist');?>" method="post" onsubmit="return check()">
		<h1>注册</h1>
		<label for="email">邮箱<input type="text" id="email" name="email" class="email" placeholder="请输入您的常用邮箱作为登陆账号" onblur="check_email();"/>
			<i id="email_notice">*</i>
		</label>
		<label for="nickname">昵称<input type="text" name="nickname" id="nickname" placeholder="该怎么称呼你？中英文均可 " onblur="check_nickname();"/>
			<i id="nickname_notice">*</i>
		</label>
		<label for="password">密码<input type="text" id="password" name="password" placeholder="请输入密码" onblur="check_pwd();"/>
			<i id="password_notice">*</i>
		</label>
		<label for="comfire_pwd">确认密码<input type="text" id="comfire_pwd" placeholder="请再次输入密码" onblur="check_psd();"/>
			<i id="comfire_pwd_notice">*</i>
		</label>
		<label for="mobile">手机<input type="text" id="mobile" name="mobile" placeholder="请输入你的手机号" onblur="check_mobile();"/>
			<i id="mobile_notice">*</i>
		</label>
		<button type="submit" id="register" class="regist">注册</button>
	</form>
</div>
</body>
</html>
<script src='/Public/js/jquery-1.8.3.min.js'></script>
<script src='/Public/js/placeholder.js'></script>
<!--<script src='/Public/js/layer.js'></script>-->
<script>
var FlagEma = false;
var FlagNam = false;
var FlagPwd = false;
var FlagPsd = false;
var FlagTel = false;
//验证表单
function check()
{
	if(!check_email())
	{
		check_email();
		return false;
	}
	if(!check_nickname())
	{
		check_nickname();
		return false;
	}
	if(!check_pwd())
	{
		check_pwd();
		return false;
	}
	if(!check_psd())
	{
		check_psd();
		return false;
	}
	if(!check_mobile())
	{
		check_mobile();
		return false;
	}
	return true;

}

//验证邮箱
function check_email()
{
	var email = $.trim($("#email").val());
	//alert(email)
	var myemail = /^\w+@\w+(\.)\w+$/;
	if(email=="")
	{
		//layer.msg("邮箱不能为空,请输入!");
		document.getElementById('email_notice').innerHTML = msg_email_blank;
		return FlagEma;
	}else if(!myemail.test(email)){
		document.getElementById('email_notice').innerHTML = msg_email_format;
		return FlagEma;
	}
	$.ajax({
		url: "<?php echo U('User/is_email');?>",
		data:{email:email},
		type: "POST",
		async: false,
		dataType: "json",
		success: function(data) {
			//alert(data)
			if(data==1){
				document.getElementById('email_notice').innerHTML = msg_email_registered;
				return FlagEma;
			}else{
				document.getElementById('email_notice').innerHTML = msg_can_rg;
				FlagEma = true;
				return FlagEma;
			}
		}
	});
	return FlagEma;
}


		//验证nickname
		function check_nickname() {
			var nickname = $.trim($("#nickname").val());
			//alert(nickname)
			if (nickname == "") {
				//layer.msg("邮箱不能为空,请输入!");
				document.getElementById('nickname_notice').innerHTML = msg_un_blank;
				return FlagNam;
			} else if (nickname !== "") {
				szMsg = "[#%&',;:=!^@]";
				//alertStr="";
				for (i = 1; i < szMsg.length + 1; i++) {
					if (nickname.indexOf(szMsg.substring(i - 1, i)) > -1) {
						document.getElementById('nickname_notice').innerHTML = msg_un_format;
						return FlagNam;
					}
				}
				if (nickname.length > 15) {
					document.getElementById('nickname_notice').innerHTML = msg_un_length;
					return FlagNam;
				}
				$.ajax({
					url: "<?php echo U('User/is_nickname');?>",
					data: {nickname: nickname},
					type: "POST",
					async: false,
					dataType: "json",
					success: function (data) {
						//alert(data)
						if (data == 1) {
							document.getElementById('nickname_notice').innerHTML = msg_un_registered;
							return FlagNam;
						} else {
							document.getElementById('nickname_notice').innerHTML = msg_can_rg;
							FlagNam = true;
							return FlagNam;
						}
					}
				});

			}
			return FlagNam;
		}

//验证密码
function check_pwd(){
	var password = $.trim($("#password").val());
	//alert(password)
	if (password == "") {
		//layer.msg("邮箱不能为空,请输入!");
		document.getElementById('password_notice').innerHTML = password_empty;
		return FlagPwd;
	} else if (password.length<6) {
		document.getElementById('password_notice').innerHTML = password_shorter_s;
		return FlagPwd;
	}else{
		document.getElementById('password_notice').innerHTML = msg_can_rg;
		FlagPwd = true;
		return FlagPwd;
	}
	return FlagPwd;
}


//验证密码
function check_psd() {
	var password = $.trim($("#password").val());
	var comfire_pwd = $.trim($("#comfire_pwd").val());
	//alert(password)
	if (comfire_pwd == "") {
		//layer.msg("邮箱不能为空,请输入!");
		document.getElementById('comfire_pwd_notice').innerHTML = comfire_pwd_empty;
		return FlagPsd;
	} else if (password!==comfire_pwd) {
		document.getElementById('comfire_pwd_notice').innerHTML = confirm_password_invalid;
		return FlagPsd;
	}else{
		document.getElementById('comfire_pwd_notice').innerHTML = msg_can_rg;
		FlagPsd = true;
		return FlagPsd;
	}
	return FlagPsd;
}

//验证手机号
function check_mobile()
{
	var mobile = $("#mobile").val();
	//alert(tel)
	var mytel = /^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
	if(mobile=="")
	{
		//layer.msg("手机号不能为空,请输入!");
		document.getElementById('mobile_notice').innerHTML = mobile_phone_invalid;
		return FlagTel;
	}else if(!mytel.test(mobile))
	{
		//layer.msg("手机号格式不正确,请重新输入!");
		document.getElementById('mobile_notice').innerHTML = mobile_phone_invalid;
		return FlagTel;
	}
	$.ajax({
		url: "<?php echo U('User/is_mobile');?>",
		data:{mobile:mobile},
		type: "POST",
		async: false,
		dataType: "json",
		success: function(data) {
			//alert(data)
			if(data==1){
				//layer.msg("该手机号已存在,请重新输入!");
				document.getElementById('mobile_notice').innerHTML = mobile_phone_register;
				return FlagTel;
			}else{
				document.getElementById('mobile_notice').innerHTML =msg_can_rg;
				FlagTel = true;
				return FlagTel;
			}
		}
	});
	return FlagTel;
}


var process_request = "<img src='/ThinkPHP_3.2/Public/img/loading.gif' width='16' height='16' border='0' align='absmiddle' />正在数据处理中...";
var process_quest = "<span style='COLOR:#ff0000'>处理异常...</span>";
var username_empty = "<span style='COLOR:#ff0000'>  × 用户名不能为空!</span>";
var username_shorter = "<span style='COLOR:#ff0000'> × 用户名长度不能少于 3 个字符。</span>";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "<span style='COLOR:#ff0000'> × 登录密码不能为空。</span>";
var comfire_pwd_empty = "<span style='COLOR:#ff0000'> × 确认密码不能为空。</span>";
var password_shorter_s = "<span style='COLOR:#ff0000'> × 登录密码不能少于 6 个字符。</span>";
var password_shorter_m = "<span style='COLOR:#ff0000'> × 登录密码不能多于 30 个字符。</span>";
var confirm_password_invalid = "<span style='COLOR:#ff0000'> × 两次输入密码不一致!</span>";
var email_empty = "<span style='COLOR:#ff0000'> × Email 为空</span>";
var email_invalid = "- Email 不是合法的地址";
var agreement = "<span style='COLOR:#ff0000'> × 您没有接受协议</span>";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var mobile_phone_register = "- 手机号码已存在";
var msg_un_blank = "<span style='COLOR:#ff0000'> × 用户名不能为空!</span>";
var msg_un_length = "<span style='COLOR:#ff0000'> × 用户名最长不得超过15个字符</span>";
var msg_un_format = "<span style='COLOR:#ff0000'> × 用户名含有非法字符!</span>";
var msg_un_registered = "<span style='COLOR:#ff0000'> × 用户名已经存在,请重新输入!</span>";
var msg_can_rg = "<span style='COLOR:#006600'> √ 可以注册！</span>";
var msg_email_blank = "<span style='COLOR:#ff0000'> × 邮件地址不能为空!</span>";
var msg_email_registered = " × 邮箱已存在,请重新输入!";
var msg_email_format = "<span style='COLOR:#ff0000'> × 邮件地址不合法!</span>";
var username_exist = "用户名 %s 已经存在";
var info_can="<span style='COLOR:#006600'> √ 可以注册!</span>";
var info_right="<span style='COLOR:#006600'> √ 填写正确!</span>";
</script>