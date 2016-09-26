<?php
namespace Home\Controller;
use Think\Controller;
class WendaController extends Controller{
	
	//渲染问答页
	public function index(){
		$this->display('Wenda/wenda');
	}

	//提问页
	public function tiwen(){
		$this->display();
	}

	//问专家页
	public  function zhuanjia(){
		$this->display();
	}

	//问答详情
	public function content(){

		/***
		 * 查询数据操作
		 */
		//显示详情页
		$this->display();
	}

}