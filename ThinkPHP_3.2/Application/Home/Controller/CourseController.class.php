<?php
namespace Home\Controller;
use Think\Controller;
class CourseController extends Controller
{
	//渲染微课页
	public function index() {

		$this->display('Wk/weike');
	}


}