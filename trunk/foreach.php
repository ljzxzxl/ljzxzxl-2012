<?php
$arr = array(
"a" => "aa",
"b" => "bb",
"c" => "cc",
);

foreach($arr as $a){//第一种，在循环中只要用到值
echo $a."<br>";
}
//在页面中输出
//aa
//bb
//cc
foreach($arr as $key => $value){//第二种，在循环中既要用到值也要用到键
echo $key . "=>".$value."<br>";
}
//在页面中输出
//a=>aa
//b=>bb
//c=>cc
?>