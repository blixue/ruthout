<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller{
	//显示服务商城
	public function shop(){
	/***操作数据查询**/
		$data=cookie('account');
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display('shop');
	}

}
