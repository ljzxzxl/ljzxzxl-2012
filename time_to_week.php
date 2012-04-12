<?php
date_default_timezone_set("PRC");
$_time = time();
echo intval(date("W", $_time));

echo '<br />';
echo strtotime('last monday');
echo '<br />';
echo strtotime('next monday');
?>