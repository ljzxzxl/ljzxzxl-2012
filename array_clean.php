<?php
/**
 * 清除数重复或组值为空的元素
 *
 * @return array
 * $Author: Xeylon Zhou
 */
function array_clean($arr){
	if(is_array($arr)){
		$arr = array_unique($arr);
		foreach($arr as $k=>$v){
			if($v==''){
				unset($arr[$k]);
			}
		}
		$result = $arr;
	}else{
		$result = false;
	}
	return $result;
}


$array = array('2',19,33,88,2,4,5,5,99,99,'',33,'');
print_r($array);
echo '<br/>';
$res = array_clean($array);
print_r($res);
?>