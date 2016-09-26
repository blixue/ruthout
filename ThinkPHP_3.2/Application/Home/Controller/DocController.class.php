<?php
namespace Home\Controller;
use Think\Controller;
use \Org\Util\AjaxPage;
class DocController extends Controller {
	
	//渲染资料下载页
	public function index(){
		$credit = D('document_info');
		$count = $credit->count(); //计算记录数
		$limitRows = 7; // 设置每页记录数
		$p = new AjaxPage($count, $limitRows,"pages"); //第三个参数是你需要调用换页的ajax函数名
		$limit_value = $p->firstRow . "," . $p->listRows;
		$data = $credit->limit($limit_value)->select(); // 根据积分查询数据
		//print_r($data);die;
		$page = $p->show(); // 产生分页信息，AJAX的连接在此处生成
		$this->assign('list',$data);
		$this->assign('page',$page);
		$this->display('Doc/doc');
	}

	//分页二次
	public function pages_index(){
		$credit = D('document_info');
		$count = $credit->count(); //计算记录数
		$limitRows = 7; // 设置每页记录数
		$p = new AjaxPage($count, $limitRows,"pages"); //第三个参数是你需要调用换页的ajax函数名
		$limit_value = $p->firstRow . "," . $p->listRows;
		$download_count = I('post.download_count');
		$create_time = I('post.create_time');
		$bean = I('post.bean');
		if($download_count=1){
			$data = $credit->order('download_count desc')->limit($limit_value)->select(); // 根据下载量
			$page = $p->show(); // 产生分页信息，AJAX的连接在此处生成
			$this->assign('list',$data);
			$this->assign('page',$page);
			$this->display('Doc/doc_page');
		}elseif($download_count=0){
			$data = $credit->order('')->limit($limit_value)->select(); // 根据下载量
			$page = $p->show(); // 产生分页信息，AJAX的连接在此处生成
			$this->assign('list',$data);
			$this->assign('page',$page);
			$this->display('Doc/doc_page');
		}




	}



	//渲染资料上传页
	public function upload(){
		$this->display('Doc/upload');
	}

	//执行上传资料
	public function ups(){
		$uid = cookie('uid');

		echo "我是往哪打";
	}
	
}