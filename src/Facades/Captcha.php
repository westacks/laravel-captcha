<?php

namespace WeStacks\LaravelCaptcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WeStacks\LaravelCaptcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
