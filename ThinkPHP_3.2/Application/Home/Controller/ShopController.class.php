<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller{
	//显示服务商城
	public function shop(){
	/***操作数据查询**/
		$this->display('Shop/shop');
	}

}
