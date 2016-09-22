<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi.cn@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
// config.php 2013-02-25

//定义回调URL通用的URL
define('URL_CALLBACK', 'http://www.blixue.com?index.php');

//http://demo.cn/index.php?m=Index&a=callback&type=
return array(

	//腾讯QQ登录配置
	'THINK_SDK_QQ' => array(
		'APP_KEY'    => '101308419', //应用注册成功后分配的 APP ID
		'APP_SECRET' => 'abbd356aa9ff2f43616f89ae68ef5c90', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'qq',
	),
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'ruthout', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	//'DB_PREFIX' => 'think_', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
);