<?php

//随机密码生成器

function randcode($n){
    $str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $re='';
    $len=strlen($str);
    for($i=0; $i < $n ; $i++){
        $re .= $str{rand(0,$len-1)};
    }
    return $re;
}
echo randcode(16);
?>