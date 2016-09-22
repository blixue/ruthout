<?php
namespace Home\Controller;
use Think\Controller;
class DocController extends Controller {
	
	//渲染资料下载页
	public function index(){
	
		$this->display('Doc/doc');
	}

	//渲染资料上传页
	public function upload(){
		$this->display('Doc/upload');
	}

	//执行上传资料
	public function ups(){
		echo "123";
	}
	
}