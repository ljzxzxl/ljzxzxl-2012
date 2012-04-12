<?php
$a=array('data'=>"hi", 123);
$b=serialize($a);
echo $b;  //这个就是描述过的数组但在这里是一个字符串而已

echo "<br/>";

$c=unserialize($b); //把描述过的数据恢复
print_r($c);   //还原成为 $a ，数组结构并没有丢失

?>