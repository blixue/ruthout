<?php
namespace Home\Controller;
use Think\Controller;
class WendaController extends Controller{
	
	//渲染问答页
	public function index(){
		$data=decrypt(cookie('account'));
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display('Wenda/wenda');
	}

	//提问页
	public function tiwen(){
		$data=decrypt(cookie('account'));
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display();
	}

	//问专家页
	public  function zhuanjia(){
		$data=decrypt(cookie('account'));
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display();
	}

	//问答详情
	public function content(){

		/***
		 * 查询数据操作
		 */
		//显示详情页
		$data=decrypt(cookie('account'));
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display();
	}

}