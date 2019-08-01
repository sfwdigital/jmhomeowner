
<?php
session_start();
echo session_id();

ini_set('session.save_path', $sessdir);
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

	$get_google_geodata = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDmm0PBYkPWc5ozsLgh20N3CLvmoIcmDN4&latlng='.$ip_latitude.','.$ip_longitude.'');
	$google_geodata = json_decode($get_google_geodata);
	if(!empty($google_geodata)){
		$address_data = $google_geodata->results[0]->address_components;
		foreach($address_data as $addr){
			if($addr->types[0] == 'administrative_area_level_2'){
					$county_name = strstr($addr->short_name, 'County', true);
			}
		}
	}

	include('_db_connect.php');
	$county_rslt = $db->prepare('SELECT * FROM r_codes WHERE state = "'.$state.'" AND county = "'.$county_name.'"');
	$county_rslt->execute();
	for($i=0; $county_rslt_row = $county_rslt->fetch(); $i++){
		 $climate_zone_number = $county_rslt_row['climate_zone'];
	}

	$_SESSION['county'] = $county_name;
	$_SESSION['climate_zone'] = $climate_zone_number;
  $_SESSION['zipcode'] = $ip_zip_code;
  $_SESSION['city'] = $city;
  $_SESSION['state'] = $state;


?>


<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="findjm/leaflet-min.css" />

<div id="insulationdata">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell">
				<img src="https://placehold.it/400x200?text=logo" alt="Johns Manville" />
			</div>
		</div>
		<div class="grid-x">
			<div class="cell">
				<h1>Find Your Insulation</h1>
				<p class="lead">Home Insulation Guide</p>
				<a href="project.php" class="button secondary" id="getstarted" title="Get Started">Get Started</a>

			</div>
		</div>
	</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>
