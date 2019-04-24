<?php

namespace Sinbadxiii\Gateway;

use Sinbadxiii\Client\ClientInterface;
use Sinbadxiii\Client\CurlClient;

abstract class GatewayBase {

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        if (!$client) {
            $this->client = new CurlClient();
        }
    }
}