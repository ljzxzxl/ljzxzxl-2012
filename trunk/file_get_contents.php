<?php
function get_url_intime($url,$timeout=1){
	$opts = array(
	  'http'=>array(
		'method'=>"GET",
		'timeout'=>$timeout,
	   )
	);
	$context = stream_context_create($opts);
	$result = file_get_contents($url, false, $context);
	return $result;
}
$content = @get_url_intime("http://ljzxzxl.com/", 1);
//echo "test1";
if($content){
	echo $content;
}else{
	echo "time out";
}
//echo "test2";
?>