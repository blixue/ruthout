<?php
namespace Home\Controller;
use Think\Controller;
class CourseController extends Controller
{
	//渲染微课页
	public function index() {
		$data=decrypt(cookie('account'));
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display('Wk/weike');
	}


}