<?php
header('Content-Type:text/html;charset= utf-8');   //发送头部信息，确认页面编码
$curlPost='{"app_id":"200","login_name":"ljzxzxl8","password":"123456","email":"","mobile":"15618381258","register_ip":"192.168.94.198","source":""}';          //定义需要发送的字符串，关键字与它的值
$ch=curl_init();           //初始化一个curl
curl_setopt($ch,CURLOPT_URL,'http://10.10.10.243:10005/user/regist'); //设置目标URL
curl_setopt($ch,CURLOPT_POST,1);         //设置使用POST发送数据
curl_setopt($ch,CURLOPT_POSTFIELDS,$curlPost);      //设置POST数据内容为前面定义的字符串
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);       //设置是否输出返回结果（设置为不打印）
$data=curl_exec($ch);           //执行请求并返回结果
curl_close($ch);            //关闭CURL
echo $data;              //输出结果
?>