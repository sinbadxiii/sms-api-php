# SMS GATEWAY PHP PHP

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

```

$authParam = [
    'token'  => 'xxxxxxx',
    'device' => 'yyyy'
];

 $sms = new \Sinbadxiii\SMS(
                new \Sinbadxiii\Gateway\GatewaySemySMS(
                    new \Sinbadxiii\Client\CurlClient(), $authParam
                )
            );

$sms->send($message, $phone);

```




