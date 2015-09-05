<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type:application/xml");
	
	$area = $_GET['area']; // $lat = $_GET['lat'];
	
	$url = 'http://kartan.linkoping.se/isms/poi?service=wfs&request=getfeature&typename=parkomraden&version=1.1.0&';

	// $url = 'http://api.yr.no/weatherapi/locationforecast/1.9/?lat='.$lat.';lon='.$lon;
	
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$content = file_get_contents($url);
	echo $content;
?>
