<?php
namespace Home\Controller;
use Think\Controller;
class CoachController extends Controller{
	/**
	*	私人教练
	*/

	public  function coach(){
		//操作数据查询
			

		//显示页面
		$data=cookie('account');
		if($data){
			$this->data = $data;
		}else if(cookie('email')){
			$this->data = cookie('email');
		}
		$this->assign('data',$data);
		$this->display('Coach/coach');
	}
	
}