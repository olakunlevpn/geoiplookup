<?php

namespace Olakunlevpn\Geoiplookup;

class getInfo implements \JsonSerializable
{
    protected $ip;
    protected $isp;
    protected $org;
    protected $hostname;
    protected $latitude;
    protected $longitude;
    protected $postal_code;
    protected $city;
    protected $country_code;
    protected $country_name;
    protected $continent_code;
    protected $continent_name;
    protected $region;
    protected $district;
    protected $timezone_name;
    protected $connection_type;
    protected $asn_number;
    protected $asn_org;
    protected $asn;
    protected $currency_code;
    protected $currency_name;

    /**
     * File constructor.
     *
     * @param $ip
     * @param $isp
     * @param $org
     * @param $hostname
     * @param $latitude
     * @param $longitude
     * @param $postal_code
     * @param $city
     * @param $country_code
     * @param $country_name
     * @param $continent_code
     * @param $continent_name
     * @param $region
     * @param $district
     * @param $timezone_name
     * @param $connection_type
     * @param $asn_number
     * @param $asn_org
     * @param $asn
     * @param $currency_code
     * @param $currency_name
     */
    public function __construct($ip, $isp = null, $org = null, $hostname = null, $latitude = null, $longitude = null, $postal_code = null, $city = null, $country_code = null, $country_name = null, $continent_code = null, $continent_name = null, $region = null, $district = null, $timezone_name = null, $connection_type = null, $asn_number = null, $asn_org = null, $asn = null, $currency_code = null, $currency_name = null)
    {
        $this->ip                       = $ip;
        $this->isp                      = $isp;
        $this->org                      = $org;
        $this->hostname                 = $hostname;
        $this->latitude                 = $latitude;
        $this->longitude                = $longitude;
        $this->postal_code              = $postal_code;
        $this->city                     = $city;
        $this->country_code             = $country_code;
        $this->country_name             = $country_name;
        $this->continent_code           = $continent_code;
        $this->continent_name           = $continent_name;
        $this->region                   = $region;
        $this->district                 = $district;
        $this->timezone_name            = $timezone_name;
        $this->connection_type          = $connection_type;
        $this->asn_number               = $asn_number;
        $this->asn_org                  = $asn_org;
        $this->asn                      = $asn;
        $this->currency_code            = $currency_code;
        $this->currency_name            = $currency_name;
    }

    /**
     * @return array
     * */
    public function jsonSerialize()
    {
        return [
            'ip'                                  => $this->getIp(),
            'isp'                                 => $this->getIsp(),
            'org'                                 => $this->getOrganization(),
            'hostname'                            => $this->getHostname(),
            'latitude'                            => $this->getLatitude(),
            'longitude'                           => $this->getLongitude(),
            'postal_code'                         => $this->getPostalCode(),
            'city'                                => $this->getCity(),
            'country_code'                        => $this->getCountryCode(),
            'country_name'                        => $this->getCountry(),
            'continent_code'                      => $this->getContinentCode(),
            'continent_name'                      => $this->getContinentName(),
            'region'                              => $this->getRegion(),
            'district'                            => $this->getDistrict(),
            'timezone_name'                       => $this->getTimeZone(),
            'connection_type'                     => $this->getConnectionType(),
            'asn_number'                          => $this->getAsnNumber(),
            'asn_org'                             => $this->getAsnOrg(),
            'asn'                                 => $this->getAsn(),
            'currency_code'                       => $this->getCurrencyCode(),
            'currency_name'                       => $this->GetCurrencyName(),
        ];
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }


      /**
     * @return string
     */
    public function getIsp()
    {
        return $this->isp;
    }




      /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }



      /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }



      /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }




      /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }



      /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }




      /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }




      /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country_name;
    }


      /**
     * @return string
     */
    public function getContinentCode()
    {
        return $this->continent_code;
    }




      /**
     * @return string
     */
    public function getContinentName()
    {
        return $this->continent_name;
    }




      /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }




      /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }




      /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timezone_name;
    }




      /**
     * @return string
     */
    public function getConnectionType()
    {
        return $this->connection_type;
    }




      /**
     * @return string
     */
    public function getAsnNumber()
    {
        return $this->asn_number;
    }




      /**
     * @return string
     */
    public function getAsnOrg()
    {
        return $this->asn_org;
    }




      /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->org;
    }




      /**
     * @return string
     */
    public function getAsn()
    {
        return $this->asn;
    }




      /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }



      /**
     * @return string
     */
    public function GetCurrencyName()
    {
        return $this->currency_name;
    }


  
}
