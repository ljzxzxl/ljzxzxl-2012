<?php
echo $_SERVER['HTTP_REFERER'];
echo '<br/>';
echo $_SERVER["REQUEST_URI"];
echo '<br/>';
echo $_SERVER["SCRIPT_NAME"];
echo '<br/>';
echo $_SERVER["PHP_SELF"];
echo '<br/>';
echo $_SERVER['PHP_SELF'];
echo '<br/>';
echo $_SERVER["QUERY_STRING"];
echo '<br/>';
$pathinfo = pathinfo($_SERVER['PHP_SELF']);
echo $from = $pathinfo['basename'];
?>