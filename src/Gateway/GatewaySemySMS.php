<?php

namespace Sinbadxiii\Gateway;

use Sinbadxiii\Client\ClientInterface;

class GatewaySemySMS extends GatewayBase implements GatewayInterface
{
    const BASE_URL = 'https://semysms.net/';

    protected $token;
    protected $deviceId;

    public function __construct(array $authParam, ClientInterface $client = null)
    {        
        $this->token    = $authParam['token'];
        $this->deviceId = $authParam['device'];
        parent::__construct($client);

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