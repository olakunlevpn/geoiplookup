<?php

require_once "vendor/autoload.php";
use Olakunlevpn\Geoiplookup\Client;

$Geoiplookup = new GeoiplookupClient();

$data = $Geoiplookup->echoPhrase();
echo $data->getIp();


// $data->getIp();
// $data->getIsp();
// $data->getOrganization();
// $data->getHostname();
// $data->getLatitude();
// $data->getLongitude();
// $data->getPostalCode();
// $data->getCity();
// $data->getCountryCode();
// $data->getCountry();
// $data->getContinentCode();
// $data->getContinentName();
// $data->getRegion();
// $data->getDistrict();
// $data->getTimeZone();
// $data->getConnectionType();
// $data->getAsnNumber();
// $data->getAsnOrg();
// $data->getAsn();
// $data->getCurrencyCode();
// $data->GetCurrencyName();
