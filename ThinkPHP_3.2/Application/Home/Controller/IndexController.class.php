<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 首页
	 */
    public function index(){
		$data=session('account');
		if($data){
			$this->data = $data;
		}else if(cookie('account')){
			$this->data = cookie('account');
		}
		$this->display();
    }

	//渲染注册页
	public function register(){
		$this->display('User/regist');
	}

	 public function login()
	{
		$this->display('User/login');
	}

	function product() {

	}

	function search() {

	}
}