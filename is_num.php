<?php
$num="1w234.354";
if(preg_match("/[^\d-., ]/",$num))
{
echo "不是数字: ".$num;
} 
else 
{
echo "是数字: ".$num;
}
?>