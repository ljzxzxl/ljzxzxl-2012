<?php
#允许的文件扩展名
$allowed_types = array('jpg', 'gif', 'png');
$filename = $_FILES['filename']['name'];
$filename = 'aa.zip';
#正则表达式匹配出上传文件的扩展名
preg_match('|\.(\w+)$|', $filename, $ext);
print_r($ext);
#转化成小写
echo '<br/>';
echo $ext = strtolower($ext[1]);
#判断是否在被允许的扩展名里
if(!in_array($ext, $allowed_types)){
 die('不被允许的文件类型');
}
?>