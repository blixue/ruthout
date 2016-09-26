<?php

namespace Home\Model;
use Think\Model;
class UserModel extends Model {    
	//public $tableName = 'user';
	/**
	*用户登录及注册
	 **/

	//用户登录判断
	function getLoginUserInfo($account, $password){
		$user = M('user');
		$user_info = $user
				   ->join('user_profile ON user.id = user_profile.id')
				   ->where("user.nickname='$account' OR user.email='$account' OR user_profile.mobile='$account'")
				   ->select();
		return $user_info;
	}


    //检测邮箱存在
	function is_email($email){
		$user = M('user');
		$is_email =$user
				->where( "user.email='$email'")
				->select();
		return $is_email;
	}

	//检测用户存在
	function is_nickname($nickname){
		$user = M('user');
		$is_name =$user
			   ->where( "user.nickname='$nickname'")
			   ->select();
		return $is_name;
	}

	//检测手机号存在
	function is_mobile($mobile){
		$user = M('user');
		$is_mobile =$user
			->join('user_profile ON user.id = user_profile.id')
			->where( "user_profile.mobile='$mobile'")
			->select();
		return $is_mobile;
	}



	//用户入库操作
	function userRigster($user,$user_profile){
		$User = M('user');
		//去除标签并入库
		$user_id = $User->data($user)->filter('strip_tags')->add();
		$user_profile['id'] = $user_id;
		$User_profile = M('user_profile');
		$user_id = $User_profile->data($user_profile)->filter('strip_tags')->add();
		return $user_id;
	}
}