<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize(){
        // 自动运行方法
        if(!session('account')){
            $this->error("没有登录");

        }

    }
}