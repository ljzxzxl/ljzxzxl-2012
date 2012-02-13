<?php

$client = new SoapClient('http://58.211.16.85:3338/sendservice.asmx?WSDL',array('cache_wsdl' =>WSDL_CACHE_NONE));

$para=array(
'SendTarget'=>1,
'TriggerType'=>1,
'SmsArea'=>'shanghai',
'ShopID'=>4886,
'FormID'=>4,
'Channel'=>3,
'OderCreater'=>'周晓龙',
'Mobile'=>'15618381256',
'SmsContent'=>'你好，这是短信接口测试内容！'
);

try{
	$result=$client->__soapCall("smssend",array('parameters'=>$para));
	$res=$result->smssendResult;
}catch(Exception $e) {
	$res=0;
	echo '发生错误:'.$e;
}

$res=intval($res);

if($res==1){
	echo "发送成功";
}else if($res==-1){
	echo "发送失败";
}else if($res==-2){
	echo "手机号码为空";
}else if($res==-3){
	echo "短信内容为空";
}

?>