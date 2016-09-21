<?php
/**
 * Created by PhpStorm.
 * User: jake
 * Date: 2016/9/14
 * Time: 16:11
 */
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller
{
    public function _empty()
    {
        echo "对不起系统找不到地方了";
    }
}