<?php

namespace helpModule\HelpModule\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Help-module\HelpModule\HelpModule
 */
class HelpModule extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Help - module\HelpModule\HelpModule::class;
    }
}
