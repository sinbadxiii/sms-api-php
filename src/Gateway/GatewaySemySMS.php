<?php

namespace Sinbadxiii\Gateway;

class GatewaySemySMS implements GatewayInterface
{
    const BASE_URL = 'https://semysms.net/';

    protected $client;
    protected $token;
    protected $deviceId;

    public function __construct($client, $authParam)
    {
        $this->client   = $client;
        $this->token    = $authParam['token'];
        $this->deviceId = $authParam['device'];
    }

    public function sendSMS($message, $phone) {

        $param = [
            'phone'  => $phone,
            'msg'    => trim($message),
            'token'  => $this->token,
            'device' => $this->deviceId,
        ];
        
        $url = self::BASE_URL . 'api/3/sms.php';
        $requestResult = $this->client->request($url, $param);

        return $requestResult;
    }
}