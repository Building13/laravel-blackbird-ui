<?php

namespace Building13\Blackbird\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Building13\Blackbird\Blackbird
 */
class Blackbird extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Building13\Blackbird\Blackbird::class;
    }
}
