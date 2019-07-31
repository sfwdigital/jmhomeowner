
<?php
$userip = $_SERVER['REMOTE_ADDR'];
$ch = curl_init();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if( strpos( $actual_link, '8888' ) !== false) {
	curl_setopt($ch, CURLOPT_URL, "https://api.ipdata.co/?api-key=test");
}else{
	curl_setopt($ch, CURLOPT_URL, "https://api.ipdata.co/$userip?api-key=a61373aa3c08c43730e6908b5055b921aafdc74d507b8aa26dda9ab0");
	// curl_setopt($ch, CURLOPT_URL, "https://api.ipdata.co/?api-key=test");

}
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	"Accept: application/json"
));
	$response = curl_exec($ch);
	curl_close($ch);
	$array = json_decode(trim($response), TRUE);
	// echo '<pre>';
	// print_r($array);
	// echo '</pre>';
	if ($array['postal'] == ''){
		$ip_zip_code = '27023';
		$ip_latitude = '36.099861';
		$ip_longitude ='-80.244217';
		$ip_lnglat = ''.$ip_latitude.', '.$ip_longitude.'';
	}
	if ($array['postal'] != ''){
		$ip_zip_code = $array['postal'];
	  $ip_latitude = $array['latitude'];
	  $ip_longitude = $array['longitude'];
		$state = $array['region'];
		 $city = $array['city'];
		$ip_lnglat = ''.$ip_latitude.', '.$ip_longitude.'';
	}
?>

<?php
	// $getZip = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDmm0PBYkPWc5ozsLgh20N3CLvmoIcmDN4&latlng='.$ip_latitude.','.$ip_longitude.'');
	$getZip = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyAWbCDoFMUduF33G6Ce9lCH0yFGXCfR2-Y&latlng='.$ip_latitude.','.$ip_longitude.'');

	$outputZip = json_decode($getZip);
	if(!empty($outputZip)){
		$addressData = $outputZip->results[0]->address_components;
		foreach($addressData as $addr){
			if($addr->types[0] == 'administrative_area_level_2'){
				  $county_name = $addr->long_name;
			}

		}
	}
	// $rslt_a = $db->prepare("SELECT * FROM products WHERE `product_id` = '28'");
		include('_db_connect.php');
		// $hashresult = $db->prepare('SELECT * FROM builder WHERE order_id = "'.$temporderno.'"');
 echo $county_name;
 echo	$state;
 echo	$ip_zip_code;
		$county_rslt = $db->prepare('SELECT * FROM r_codes WHERE state = "'.$state.'" AND county = "'.$county_name.'"');
		$county_rslt->execute();
		for($i=0; $county_rslt_row = $county_rslt->fetch(); $i++){
		echo $county_rslt_row['climate_zone'];
		}

?>




<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="findjm/leaflet-min.css" />

<div id="insulationdata">
	<?php include 'intro.php';?>
</div>

<?php include 'includes/footer.php'; ?>
