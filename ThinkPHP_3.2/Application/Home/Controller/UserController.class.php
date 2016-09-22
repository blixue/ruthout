<?php
namespace Home\Controller;
use Think\Controller;
//use Org\ThinkSDK\sdk\QqSDK;
use Org\ThinkSDK\ThinkOauth;
class UserController extends Controller
{
	//渲染注册页
	public function register_y(){
		$this->display('User/regist');
	}

	//渲染登录页
	public function login_y()
	{
		$this->display('User/login');
	}


	/**
	 * 用户登录
	 */
	public function login()
	{
		//echo "123";die;
		if(IS_GET){
			$this->display();
		}
		if ($_POST) {
			$account = I('post.account');
			$password = I('post.password');
			$auto = I('post.auto');
		}
			//$user=M('User')->where($condition)->find();
			$object = D('User');
			$user_info = $object->getLoginUserInfo($account, $password);
			if (empty($user_info)) {
				echo "用户名错误";
				echo "</br>";
			}
			$verify_password = encode_password($password, $user_info['salt']);
			if ($verify_password != $user_info['password']) {
				echo "密码错误";
			}

			//成功页
			$id=$user_info[id];
			if($user_info[email]){
				$account=$user_info[email];
				//$account=$user_info[email];
			}
			session('id',$user_info[id]);
			session('account',$account);
			if($auto=='on'){
				cookie('id',$id,30*24*3600);
				cookie('account',$account,30*24*3600);
			}
			redirect(__APP__);



	}

	//退出登录
	public function logout(){
		session('id',null);
		session('account',null);
		cookie('id',null);
		cookie('account',null);
		redirect(__APP__);
	}


	/**
	 * 检测account是否存在
	 */
		public function is_email(){
			$User = D('User');
			$email = I(email);
			$is_email = $User->is_email($email);
			if(is_array($is_email)){
				$this->ajaxReturn(1);
			}else{
				$this->ajaxReturn(0);
			}
		}

		public function is_nickname(){
			$User = D('User');
			$nickname = I(nickname);
			$is_nickname = $User->is_nickname($nickname);
			if(is_array($is_nickname)){
				$this->ajaxReturn(1);
			}else{
				$this->ajaxReturn(0);
			}
		}

		public function is_mobile(){
			$User = D('User');
			$mobile = I(mobile);
			$is_mobile = $User->is_mobile($mobile);
			if(is_array($is_mobile)){
				$this->ajaxReturn(1);
			}else{
				$this->ajaxReturn(0);
			}
		}


	/*
   * 用户注册
   */
	public function regist(){
		if(IS_GET){
			$this->display();
		}
		if(IS_POST) {
			$data = I('post.');
			$email = $data['email'];
			$nickname = $data['nickname'];
			$password = $data['password'];
			$mobile = $data['mobile'];
			//print_r($password);die;
				$user = [];
				$user['salt'] = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
				$user['password'] = encode_password($password, $user['salt']);
				$user['createdTime'] = time();
				$user['email'] = $email;
				$user['nickname'] = '新测试' . $nickname;
				$user['roles'] = '|ROLE_USER|';
				$user['createdIp'] = $_SERVER['REMOTE_ADDR'];
				//print_r($user);
				$user_profile = [];
				$user_profile['mobile'] = $mobile;
				$user_profile['intField1'] = 0;
				//print_r($user_profile);die;
				$User = D('User');
				$uid = $User->userRigster($user,$user_profile);
				if ($uid){
					$this->success('注册成功请登录', U('login'));
				} else {
					$this->error('注册失败');
				}
		}
	}



	//忘记密码
//	public function forget_pwd(){
//		if(IS_GET){
//			$this->display();
//		}
//		if(IS_POST){
//			$User = M('user') ;
//			$num = I('') ;
//			$data['password'] = md5(I('password')) ;
//			$email = I('email') ;
//			$datanum = $User->where(array('num'=>$num))->find();
//			if ($datanum){
//				if ($email === $datanum['email']) {
//					$User->where(array('num'=>$num))->save($data); // 根据条件更新记录
//					$this->success('密码修改成功',U('signin')) ;
//				}else{
//					$this->error('邮箱填写不正确,请重新填写');
//					exit();
//				}
//			}else{
//				$this->error('用户不存在，请注册',U('signup'));
//			}
//		}
//	}


		/**
		 * 个人中心首页
		 */
		public function index()
		{

		}


		/**
		 * qq第三方测试
		 */
		public function login_qq($type = null){
			empty($type) && $this->error('参数错误');

			$sns = \Org\ThinkSDK\ThinkOauth::getInstance($type);

			//<span style="white-space:pre"></span>//跳转到授权页面
			redirect($sns->getRequestCodeURL());
		}

	//授权回调地址
	public function callback($type = null, $code = null){
		(empty($type) || empty($code)) && $this->error('参数错误');

		//加载ThinkOauth类并实例化一个对象
		//import("ORG.ThinkSDK.ThinkOauth");
		 //Org\ThinkSDK\ThinkOauth;
		$sns  = ThinkOauth::getInstance($type);
		//腾讯微博需传递的额外参数
		$extend = null;
		if($type == 'tencent'){
			$extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
		}

		//请妥善保管这里获取到的Token信息，方便以后API调用
		//调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
		//如： $qq = ThinkOauth::getInstance('qq', $token);
		$token = $sns->getAccessToken($code , $extend);
		print_r($token);die;
		//获取当前登录用户信息
		if(is_array($token)){
			$user_info = A('Type', 'Event')->$type($token);
			print_r($user_info);die;
			echo("<h1>恭喜！使用 {$type} 用户登录成功</h1><br>");
			echo("授权信息为：<br>");
			dump($token);
			echo("当前登录用户信息为：<br>");
			dump($user_info);
		}
	}

}

