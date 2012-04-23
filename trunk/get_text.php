<?php
$fp_in = fopen('text.txt', "r");
$array = array();
while (!feof($fp_in)) {
    $line = fgets($fp_in);
	$array[] = trim($line);
}
//print_r($array);
foreach($array as $k=>$v)
{
	if(trim($v) == 'nr-------------------------------------------------------------'){
		echo $array[$k+1];
	}
	echo '<br/>';
	if(trim($v) == 'hf-------------------------------------------------------------'){
		echo 'reply:'.$array[$k+2];
	}
}
echo 'OK';
?>