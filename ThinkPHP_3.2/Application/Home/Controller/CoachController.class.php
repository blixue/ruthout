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
		$this->display('Coach/coach');
	}
	
}