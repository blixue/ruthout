<?php

namespace Home\Model;
use Think\Model;
class UserModel extends Model {    
	protected $tableName = 'user';
	/**
	*用户登录及注册
	 **/

	//用户信息
	function getLoginUserInfo($account, $password){
		$user = M('user');
		$user_info = $user
				   ->join('user_profile ON user.id = user_profile.id')
				   ->where("user.nickname='$account' OR user.email='$account' OR user_profile.mobile='$account'")
				   ->select();
		return $user_info;
	}

	//用户注册
	function userRegister($user){
		$user = M('user');
		$regist_info = $user
			         ->data($user)->filter('strip_tags')
			         ->add();
		return $regist_info;
	}
}