<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller
{
	//用户登录
	public function login()
	{
		if ($_POST){
			$account = I('post.account');
			$password = I('post.password');
			$object = D('User');
			$user_info = $object->getLoginUserInfo($account, $password);

			if (empty($user)) {
				//返回JSON错误信息
			}

			$verify_password = encode_password($password, $user_info['salt']);
			if ($verify_password != $user_info['password']) {
				//密码错误
			}

			//登录成功
		} else {
			$this->display();
		}
	}

	//用户注册
	public function register()
	{
		//if ($_POST){
			$email = I('get.email');
			$account = I('get.nickname');
		    $password = I('get.password');
		    $is_password = I('get.is_password');
			if( $password!= $is_password){
				/***return 错误***/

			}
			$mobile = I('get.mobile');
			//print_r($user);die;
			$user = array();
			$user['salt'] = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
			//print_r($user);die;
			$user['password'] = encode_password($password, $user['salt']);
			//print_r($user);die;
			$user['createdTime'] = time();
			$user['email'] = $account."@ruthout.com";
			$user['nickname'] = '儒思用户'.$user['create_time'];
			$user['roles'] = '|ROLE_USER|';
			$user['createdIp'] = $_SERVER['REMOTE_ADDR'];
			//print_r($user);die;
			$object = D('User');
			$regist_info= $object->userRegister($user);
			if(!is_numeric($regist_info)){
				echo "不合法";
			}
		//}
			if($regist_info==1){
				echo "注册成功";
			}else{
				echo "注册失败";
			}
	}
		/**
		 * 个人中心首页
		 */
		public function index()
		{

		}
	}

