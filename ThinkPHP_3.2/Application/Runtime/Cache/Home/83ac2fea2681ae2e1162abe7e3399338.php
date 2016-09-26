<?php if (!defined('THINK_PATH')) exit();?><div id='pages'>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li >
            <img src="/Public/img/shangchuanwendang/word.png" alt="" class='llimg'>
            <p style='padding-top:15px;'><?php echo ($vo["file_name"]); ?></p>
            <p style='color:#a1a1a1;'>崔晓光&nbsp;&nbsp;&nbsp;&nbsp;2016-08-19&nbsp;&nbsp;&nbsp;&nbsp;18:42</p>
            <span class='done'>已下载<span><?php echo ($vo["download_count"]); ?></span>次</span>
            <span class='free'>免费</span>
            <a href="" class='down'>下载<img src="/Public/img/shangchuanwendang/下载下载.png" alt=""></a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <div align="center"><?php echo ($page); ?></div>
</div>