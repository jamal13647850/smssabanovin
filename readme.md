# sabanovin sms package for laravel

> Install :

	

    composer require pgsavis/smssabanovin

> providers:

    pgsavis\smssabanovin\SmssabanovinServiceProvider::class,

> aliases:

    'Smssabanovin' => pgsavis\smssabanovin\SmssabanovinFacade::class,

> publish config :

    php artisan vendor:publish --provider=pgsavis\smssabanovin\SmssabanovinServiceProvider

> set config in /config/smssabanovin.php
> 
'apiKey' => '',  
'gateway' => '',
> usage:

    \Smssabanovin::Send( $cellPhoneNumber, $message);

