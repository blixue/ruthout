<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize() {
        $allow_actions = explode(',',C('ALLOW_ACTIONS')); //配置哪些操作无需登录即可访问,比如登录，验证登录
        $curr_action = MODULE_NAME . '.' . CONTROLLER_NAME . '.' . ACTION_NAME;
        if(!in_array($curr_action,$allow_actions) && !login()) { //未登录且是需要登录后访问的
          //  $this->redirect('login');
            return 0;
        }
    }
}