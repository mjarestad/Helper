Helper
======

Misc helper functions for Laravel 4

##Installation
Install through composer. Add require `mjarestad/helper` to your `composer.json`

    "require": {
        "mjarestad/helper": "dev-master"
    }

Add the ServiceProvider to the providers array in `app/config/app.php`

    'Mjarestad\Helper\HelperServiceProvider',
    
Add the Facade to the aliases array in `app/config/app.php`

    'Filtry'  => 'Mjarestad\Helper\Facades\Helper',

##Usage
