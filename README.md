# SMS GATEWAY PHP

Library Sms Sender

Gateway List:

- SemySMS

# Getting Started

### Requirements
To use this component, you need at least:
 - Composer
 - PHP >= 5.5

NOTE: Support for legacy PHP versions (down to 7.0) is provided on a best-effort basis.

### Installing

#### Composer


```
$ php composer require sinbadxiii/sms-api-php
```

or create the composer.json file as follows:

```
{
    "require": {
        "sinbadxiii/sms-api-php": "dev-master"
    }
}
```

# Use

Example for SemySMS Gateway

```

$authParam = [
    'token'  => 'xxxxxxx',
    'device' => 'yyyy'
];

$smsGatawey = new \Sinbadxiii\Gateway\GatewaySemySMS(
                                  $authParam
                              );

$sms = new \Sinbadxiii\SMS($smsGatawey);

$message = "Hello! How are you do?";
$phone = +7xxxxxxxxx;

$sms->send($message, $phone);

```




