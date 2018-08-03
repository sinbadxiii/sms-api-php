<?php

namespace Sinbadxiii\Gateway;

interface GatewayInterface
{
    public function sendSMS($message, $phone);
}