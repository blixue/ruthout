$(function () {  
    //浏览器不支持 placeholder 时才执行  
    if (!('placeholder' in document.createElement('input'))) {  
        $('[placeholder]').each(function () {  
            var $tag = $(this); //当前 input  
            var $copy = $tag.clone();   //当前 input 的复制  
            if ($copy.val() == "") {  
                $copy.css("color", "#666");  
                $copy.css("line-height", "27px");  
                $copy.val($copy.attr('placeholder'));  
            }  
            $copy.focus(function () {  
                if (this.value == $copy.attr('placeholder')) {  
                    this.value = '';  
                    this.style.color = '#666';  
                    $copy.css("line-height", "27px"); 
                }  
            });  
            $copy.blur(function () {  
                if (this.value=="") {  
                    this.value = $copy.attr('placeholder');  
                    $tag.val("");  
                    this.style.color = '#666';  
                    $copy.css("line-height", "27px"); 
                } else {  
                    $tag.val(this.value);  
                }  
            });  
            $tag.hide().after($copy.show());    //当前 input 隐藏 ，具有 placeholder 功能js的input显示  
        });  
    }  
});  