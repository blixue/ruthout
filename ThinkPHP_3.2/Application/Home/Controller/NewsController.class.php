<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
	//资讯 页
	public function index (){
		$data=decrypt(cookie('account'));
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display('News/news');
	}

	//显示资讯详情页
	public function show(){
		
		/***
		**操作查询数据
		*/
		$this->display();
	}

}