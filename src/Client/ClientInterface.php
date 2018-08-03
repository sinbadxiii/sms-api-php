<?php

namespace Sinbadxiii\Client;

interface ClientInterface {
    
    public function request($url, array $param = array());

}