<?php
$phone = '0832-8379781';
$phone1 = '13888888888';

$phone = preg_replace('/(0[0-9]{2,3}[\-]?[2-9])[0-9]{3,4}([0-9]{3}[\-]?[0-9]?)/i','$1****$2',$phone);
$phone1 = preg_replace('/(1[358]{1}[0-9])[0-9]{4}([0-9]{4})/i','$1****$2',$phone1);

echo $phone,'<br>';
echo $phone1,'<br>';
echo hide_phone_number($phone1);
/**
 * 隐藏手机号中间四位
 * 
 */
function hide_phone_number($phone)
{
	if(!empty($phone)){
		$str = preg_replace('/(1[358]{1}[0-9])[0-9]{4}([0-9]{4})/i','$1****$2',$phone);
		return $str;
	}else{
		return false;
	}
}
?>