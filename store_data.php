<?php
  // $radius = $_POST['radius'];
  $radius ='15';
  $address = $_POST['address'];
  $geocode_ip_lnglat = $_POST['lnglat'];
  $geocode_ip_zip_code = $_POST['ip_zip_code'];


  if (!empty($address)){
    $url= 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyAWbCDoFMUduF33G6Ce9lCH0yFGXCfR2-Y&address=' . urlencode($address);
    $jsoncontent= file_get_contents($url);
    $decodedarray= json_decode($jsoncontent, true);
    $latitude= $decodedarray['results'][0]['geometry']['location']['lat'];
    $longitude= $decodedarray['results'][0]['geometry']['location']['lng'];
    if (is_numeric($address)) {
      // zipcode
      $ip_lnglat = ''.$latitude.', '.$longitude.'';
      $ip_zip_code = $address;
    } else {
      // city state
      $address_ip_lnglat = ''.$latitude.', '.$longitude.'';
      $getZip = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyAWbCDoFMUduF33G6Ce9lCH0yFGXCfR2-Y&latlng='.$latitude.','.$longitude.'');
      $outputZip = json_decode($getZip);
      if(!empty($outputZip)){
        $addressData = $outputZip->results[0]->address_components;
        foreach($addressData as $addr){
          if($addr->types[0] == 'postal_code'){
            $zipfrom_latlng = $addr->long_name;
          }
        }
      }
     $ip_zip_code = $zipfrom_latlng;
     $ip_lnglat = ''.$latitude.', '.$longitude.'';
    }
  }else{
    $ip_lnglat = $geocode_ip_lnglat;
    $ip_zip_code = $geocode_ip_zip_code;
  }
?>



  <?php

    $extlinknew = $extlink.''.$exchange_url;

    $client = new SoapClient('https://extweb.primowater.com/StoreLocator.asmx?wsdl');
    // var_dump($client->__getTypes());

    $response = $client->GetLocations(array(
      'SecurityKey' => '$h0pPr1m00nL1nE',
      'ZipCode' => $ip_zip_code,
      'RadiusMiles' => $radius,
    ));

    $array = array();
    $array = json_decode(json_encode($response), True);
    $printlocations = '';
    if(!empty($array['GetLocationsResult']['Locations']['Location'])) {
    foreach($array['GetLocationsResult']['Locations']['Location'] as $val ) {

      if ($val['Distance'] < $radius && $val['ChainID']=='LOW'){
        $displayaddress = $val['City'].', ' . $val['State'] . ' ' .$val['Zip'];
        $ProductType = '';
        foreach($val['ProductTypes']['ProductType'] as $subval) {
          if (is_array($subval)){
           $ProductType .= $subval['ProductTypeName'];
          }else if(!is_array($subval)){
           $ProductType .= $subval;
          }
        }

        $test2 ='<div class=\"location-results\"><h5>'.$val['LocationName'].'</h5><div class=\"get-directions\"><ul class=\"clsstore_details\"><li class=\"loc-content\">'.$val['Address1'].'</li><li class=\"loc-content\">'.$displayaddress.'</li></ul><div class=\"dir-btn\"><a class=\"button small hollow\" href=\"https://www.google.com/maps/dir/?api=1&amp;destination='.$directionsaddress.'\" target=\"_blank\">Get Directions</a></div></div></div><div class=\"clear\"></div><div class=\"loc-products\"></div></div>';

        $printlocations .= '["'.$test2.'",'.$val['Lat'].','.$val['Lng'].', "'.$ProductType.'", "'.$val['CustID'].'"], ';
        $printlist .=  '<div class="location-block" id="'.$val['CustID'].'">
        <div class="map-popup-mc-content get-directions result open" dataid="location_0">
        <div class="get-directions">
        <a href="#!" data-lng="'.$val['Lng'].'" data-lat="'.$val['Lat'].'" data-id="'.$val['CustID'].'"><h5>'.$val['LocationName'].'</h5></a>
        <div class="get-directions-sec">
          <ul class="clsstore_details">
            <li class="loc-content">'.$val['Address1'].'</li>
            <li class="loc-content">'.$displayaddress.'</li>
          </ul>
        <div class="dir-btn">
        <a class="button small hollow" href="https://www.google.com/maps/dir/?api=1&amp;destination='.$directionsaddress.'" target="_blank">Get Directions</a>
        </div>
        </div>
        </div>
        <div class="clear"></div>
        </div>
        </div>
        ';
      }
    }
  }//end if array isnt empty
  ?>


  <div class="grid-x ">
    <?php if ($printlist != ''){
        echo '
        <div class="cell small-24 large-6 location-container locationlist" id="locationscroller">
          '.$printlist.'
        </div>
        <div class="cell small-24 large-18 map-container">
          <div id="mapid"></div>
        </div>
        ';
    }else{
      echo '
      <div class="cell small-24 text-center ">
        <br/>
        <h3>No Results Found</h3>
      </div>
      ';
    }
    ?>


  </div>


  <script>

  jQuery(function($) {
    // url: 'https://m.lowes.com/IntegrationServices/resources/productList/json/v3_0/4294857975?langId=-1&storeId=10702&catalogId=10051&nValue=4294857975&storeNumber=0595&pageSize=20&firstRecord=0&refinements=5003703',

    var mymap = L.map('mapid').setView([<?php echo $ip_lnglat ?>], 10);
    var defaultLayer = L.tileLayer.provider('CartoDB').addTo(mymap);
    var addressPoints = [ <?php echo $printlocations; ?> ];
    var leafletView = new PruneClusterForLeaflet();
    for (i = 0, l = addressPoints.length; i < l; ++i) {
        leafletView.RegisterMarker( new PruneCluster.Marker(addressPoints[i][1], addressPoints[i][2], {title: addressPoints[i][0], id: addressPoints[i][4]} ) );
    }

    leafletView.PrepareLeafletMarker = function (marker, data) {
      marker.setPopupContent(data.title);
      marker.bindPopup(data.title);
      marker.id = (data.id);
    };

    mymap.addLayer(leafletView);
		mymap.scrollWheelZoom.disable();
		mymap.on('focus', () => { mymap.scrollWheelZoom.enable(); });
		mymap.on('blur', () => { mymap.scrollWheelZoom.disable(); });

    mymap.on('popupopen', function (e) {
      mymap.setView([e.popup._latlng.lat, e.popup._latlng.lng]);
      var currentid = e.popup._source.id;
      var container = $('.locationlist');
      var element = $('#'+currentid+'');
      container.animate({
          scrollTop: container.scrollTop = container.scrollTop() + element.offset().top - container.offset().top
      }, {
          duration: 500,
          specialEasing: {
              width: 'linear',
              height: 'easeOutBounce'
          },
          complete: function (e) {
    					$( '.location-block' ).removeClass('listhighlight');
    					$( '#'+currentid+'' ).addClass('listhighlight');
          }
      });
    });

    $( ".location-container a" ).click(function() {
      lng = $(this).data("lng");
      lat = $(this).data("lat");
      theid = $(this).data("id");
      mymap.setView(new L.LatLng(lat, lng), 20);

      mymap.eachLayer(function (marker) {
        // console.log(marker.id);
        if (marker.id == theid){
          marker.openPopup();
        }
      });

      if(mymap.hasLayer(leafletView)){
          // redraws the layer
          mymap.addLayer(leafletView);
          // mymap.removeLayer(leafletView);
        }
        else {
          mymap.addLayer(leafletView);
        }
      //  map.setView([e.latlng.lat, e.latlng.lng], 12);
      });
    });
  </script>
