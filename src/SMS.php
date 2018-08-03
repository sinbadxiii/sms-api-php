<?php

namespace Sinbadxiii;

class SMS
{
    protected $gateway;

    public function __construct($gateway)
    {
        $this->gateway = $gateway;
    }

    public function send($message, $phone)
    {
        return $this->gateway->sendSMS($message, $phone);
    }

}