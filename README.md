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

    'Helper' => 'Mjarestad\Helper\Facades\Helper',

##Usage

Get active class when uri is matched.

    Helper::getActiveClass('/');

    <a href="/users" class="{{ Helper::getActiveClass('/users') }}">Users</a>
