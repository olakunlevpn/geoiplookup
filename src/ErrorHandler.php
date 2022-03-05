<?php

namespace Olakunlevpn\Geoiplookup;
  

use GuzzleHttp\Psr7\Response;

class ErrorHandler
{
    /**
     * @param Response $response
     *
     * @throws Exception
     */
    public static function handleErrorResponse(Response $response)
    {
        $responseJson = json_decode($response->getBody(), true);

       
       // We don't have an exception mapped to this response error, throw generic exception
        $exceptionClass = MayException::class;
 

        throw new $exceptionClass('Received error from Geoiplookup: '.$responseJson['message']);
    }
}
