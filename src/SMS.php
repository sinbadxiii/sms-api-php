<?php

namespace Sinbadxiii;

use Sinbadxiii\Gateway\GatewayInterface;

class SMS
{
    protected $gateway;

    public function __construct(GatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function send($message, $phone)
    {
        return $this->gateway->sendSMS($message, $phone);
    }

}