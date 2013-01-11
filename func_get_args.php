<?php
	/**
	 * 批量接收参数
	 */
	function get_args()
    {
		$args = func_get_args();
		$arr = array();
		foreach ($args as $key => $value){
			$arr[$value] = $key;
			}
		return $arr;
    }

print_r(get_args("a","b","c"));
?>