<?php
namespace App\Http\Controllers;

class Ip2Controller extends Controller {
	
	public function index() {
		var_dump('234');
		$db = new \IP2Location\Database('./databases/IP2LOCATION-LITE-DB1.BIN', \IP2Location\Database::FILE_IO);
		
		$records = $db->lookup('8.8.8.8', \IP2Location\Database::ALL);
		echo '<pre>';
		echo 'IP Number             : ' . $records['ipNumber'] . "\n";
		echo 'IP Version            : ' . $records['ipVersion'] . "\n";
		echo 'IP Address            : ' . $records['ipAddress'] . "\n";
		echo 'Country Code          : ' . $records['countryCode'] . "\n";
		echo 'Country Name          : ' . $records['countryName'] . "\n";
		echo 'Region Name           : ' . $records['regionName'] . "\n";
		echo 'City Name             : ' . $records['cityName'] . "\n";
		echo 'Latitude              : ' . $records['latitude'] . "\n";
		echo 'Longitude             : ' . $records['longitude'] . "\n";
		echo 'Area Code             : ' . $records['areaCode'] . "\n";
		echo 'IDD Code              : ' . $records['iddCode'] . "\n";
		echo 'Weather Station Code  : ' . $records['weatherStationCode'] . "\n";
		echo 'Weather Station Name  : ' . $records['weatherStationName'] . "\n";
		echo 'MCC                   : ' . $records['mcc'] . "\n";
		echo 'MNC                   : ' . $records['mnc'] . "\n";
		echo 'Mobile Carrier        : ' . $records['mobileCarrierName'] . "\n";
		echo 'Usage Type            : ' . $records['usageType'] . "\n";
		echo 'Elevation             : ' . $records['elevation'] . "\n";
		echo 'Net Speed             : ' . $records['netSpeed'] . "\n";
		echo 'Time Zone             : ' . $records['timeZone'] . "\n";
		echo 'ZIP Code              : ' . $records['zipCode'] . "\n";
		echo 'Domain Name           : ' . $records['domainName'] . "\n";
		echo 'ISP Name              : ' . $records['isp'] . "\n";
		echo '</pre>';

	}
}