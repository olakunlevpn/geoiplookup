# PHP Geoiplookup


Geoiplookup.io IP's lookup, Perfect for PHP SDK applications.

## Install

Via Composer

``` bash
$ composer require olakunlevpn/geoiplookup
``` 

## Usage

``` php

require_once "vendor/autoload.php";
use Olakunlevpn\Geoiplookup\GeoiplookupClient;

$Geoiplookup = new GeoiplookupClient();

$data = $Geoiplookup->lookUp();
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

```



## Pass custom ip address as variable 

``` php

require_once "vendor/autoload.php";
use Olakunlevpn\Geoiplookup\GeoiplookupClient;

$Geoiplookup = new GeoiplookupClient();

$ipAddress = $_SERVER['REMOTE_ADDR']; 

$data = $Geoiplookup->lookUp($ipAddress);


echo $data->getIp();

```


## Testing

``` bash
$ phpunit
```


## Credits

- [Olakunlevpn](https://github.com/olakunlevpn)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
