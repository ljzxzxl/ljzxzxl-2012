<?php
date_default_timezone_set("PRC");
echo $date = date('Y-m-d');
echo '<br/>';
echo $today = strtotime(date('Y-m-d'));
echo '<br/>';
echo $tomorrow =  date('Y-m-d',(strtotime(date('Y-m-d'))+86400));
?>