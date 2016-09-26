<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 首页
	 */

	   public function _before_index(){

		   //$this->display();

	   }
	//热门资料
		public function index(){
			//自动登陆
			$data=cookie('account');
			if($data){
				$this->data = $data;
			}else if(cookie('email')){
				$this->data = cookie('email');
			}
			//首页热门资料
			$Doc= D('Doc');
			$hotDoc = $Doc->hotDoc();
			$this->assign('doc',$hotDoc);
			$this->assign('data',$data);
			$this->display('Index/index');


		}

	   public function _after_index(){
		  // echo 'after<br/>';
	   }






	
	//渲染搜索
	function search(){
		$search_val = I('post.search_val');
		$Search = D('Search');
		$data = $Search->search_index($search_val);
		if(is_array($data)){
			$this->assign('data',$data);
			//传搜索页面
			$this->display('search');
		}else{
			//显示无搜索结果
			$this->ajaxReturn(0);
		}
	}


	//footer关于我们
	public function about(){
		$this->display();
	
	}

	//app扫码页
	public function saoma(){
		$this->display();
	}
}