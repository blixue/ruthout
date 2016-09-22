<?php

namespace Home\Model;
use Think\Model;
class DocModel extends Model{

    /**
     * 首页的热门资料
     */
    function hotDoc(){
        $Doc = M('document_info');
        $data =$Doc->where('download_count>1500')->limit(6)->select();
        return $data;
    }




    }

