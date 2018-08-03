<?php

namespace Sinbadxiii\Client;

use Sinbadxiii\Client\ClientInterface;

class CurlClient implements ClientInterface
{
    const VERSION = '1.0';

    public function __construct()
    {
        if (!extension_loaded('curl')) {
            throw new Exception('cURL extension must be installed to use this library');
        }
    }

    public function request($url, array $param = array())
    {

        $curlOptions = array(
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_VERBOSE => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_USERAGENT => strtolower(__CLASS__ . '-PHP-SDK/v' . self::VERSION),
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($param),
            CURLOPT_URL => $url
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptions);
        $curlResult = curl_exec($curl);
        curl_close($curl);

        if ($curlResult === '') {
            throw new Exception(sprintf('empty response from portal'));
        }

        $jsonResult = json_decode($curlResult, true);
        return $jsonResult;
    }
}