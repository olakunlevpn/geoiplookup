<?php

namespace Olakunlevpn\Geoiplookup;
use Olakunlevpn\Geoiplookup\Http\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;

class GeoiplookupClient
{


     const ENDPOINT_URL = 'https://json.geoiplookup.io/';

    /**
     *  new instance
     */
    public function __construct()
    {
        $this->client = new HttpClient(['exceptions' => false]);
        if (isset($options['client'])) {
            $this->client = $options['client'];
        }
    }

    /**
     * lookup user with their IpAddress (Leave variable as null to auto grab current user ip address)
     *
     * @param string $ipAddress
     *
     * @return json
     */
    public function lookUp($ipAddress = null)
    {

         $response = $this->_Geoiplookup('GET', self::ENDPOINT_URL.'/'.$ipAddress);
          return new getInfo(
            $response['ip'],
            $response['isp'],
            $response['org'],
            $response['hostname'],
            $response['latitude'],
            $response['longitude'],
            $response['postal_code'],
            $response['city'],
            $response['country_code'],
            $response['country_name'],
            $response['continent_code'],
            $response['continent_name'],
            $response['region'],
            $response['district'],
            $response['timezone_name'],
            $response['connection_type'],
            $response['asn_number'],
            $response['asn_org'],
            $response['asn'],
            $response['currency_code'],
            $response['currency_name']
        );
    }



      /**
     *
     * @param string $method
     * @param string $route
     * @param array  $json
     *
     * @throws GuzzleException If the request fails.
     * @throws MayException     If the Geoiplookup server replies with an error.
     *
     * @return mixed
     */
    protected function _Geoiplookup($method, $route, $json = [])
    {
     

        return $this->client->guzzleRequest($method, $route);


    }


}
