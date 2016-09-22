<?php
namespace Home\Controller;
use Think\Controller;
class WendaController extends Controller{
	
	//渲染问答页
	public function index(){
		$this->display('Wenda/wenda');
	}

}