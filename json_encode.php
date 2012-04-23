<?php
$arr = array
       (
          'Name'=>'希亚',
          'Age'=>20
       );

$jsonencode = json_encode($arr);
echo $jsonencode;
echo "<br/>";
print_r(json_decode($jsonencode, true));
echo "<br/>";

/*将数组转换为JSON字符串（兼容中文）*/

/**************************************************************
 *
 *	使用特定function对数组中所有元素做处理
 *	@param	string	&$array		要处理的字符串
 *	@param	string	$function	要执行的函数
 *	@return boolean	$apply_to_keys_also		是否也应用到key上
 *	@access public
 *
 *************************************************************/
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
 
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}

/**************************************************************
 *
 *	将数组转换为JSON字符串（兼容中文）
 *	@param	array	$array		要转换的数组
 *	@return string		转换得到的json字符串
 *	@access public
 *
 *************************************************************/
function JSON($array) {
	arrayRecursive($array, 'urlencode', true);
	$json = json_encode($array);
	return urldecode($json);
}

$array = array
       (
          'Name'=>'希亚',
          'Age'=>20
       );

echo $json = JSON($array);
echo "<br/>";
print_r(json_decode($json, true));

$str = '{
	"costTime":25,
	"msg":"ok",
	"respcode":0,
	"result":{"app_id":"200","email":"jia_test@qeeka.com","id":100100025,"last_login_ip":"192.168.94.198","last_login_time":"2012-04-11 22:40:47","login_name":"jia_test","mobile":"15618381258"},
	"statusCode":"200"
}';
echo "<br/>";
print_r(json_decode($str, true));
?>