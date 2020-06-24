<?php
$url = "https://corona.lmao.ninja/all";
$data= file_get_contents($url);
$realdata= json_decode($data,true);
$cases=$realdata["cases"];
$deaths=$realdata["deaths"];
$recovered=$realdata["recovered"];

?>