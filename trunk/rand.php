<?php
echo rand(1,5);
echo '<br/>';
/**
 * 生成指定长度的随机数 2012/05/31
 */
function make_rand_num($n){
	if(intval($n)){
		$str="0123456789";
		$re='';
		$len=strlen($str);
		for($i=0; $i < $n ; $i++){
			$re .= $str{rand(0,$len-1)};
		}
		return $re;
	}else{
		return false;}
}
echo make_rand_num(16);
?>