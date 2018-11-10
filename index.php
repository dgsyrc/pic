<?php
$url[0] = "data/1.jpg";
$url[1] = "data/2.jpg";
$url[2] = "data/3.jpg";
srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>