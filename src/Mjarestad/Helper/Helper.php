<?php namespace Mjarestad\Helper;

use Request;

class Helper
{
    /**
     * Get active class
     * @param  string $path
     * @param  string $class
     * @return string|boolean
     */
    public function getActiveClass($path = '/', $class = 'active')
    {
        if(Request::is($path))
        {
            return $class;
        }

        return false;
    }
}