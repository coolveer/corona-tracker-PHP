<?php
$url = "https://corona.lmao.ninja/countries/india";
function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $data = curl_exec($ch);
    curl_close($ch);
	echo $data;
}

veer = file_get_contents_curl("https://corona.lmao.ninja/countries/india");




// $realdata= json_decode($output,true);
// $active=$realdata["active"];
// $cases=$realdata["cases"];
// $deaths=$realdata["deaths"];
// $recovered=$realdata["recovered"];
// $todayCases=$realdata["todayCases"];

?>