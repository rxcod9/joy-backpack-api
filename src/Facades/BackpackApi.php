<?php

namespace Joy\BackpackApi\Facades;

use Illuminate\Support\Facades\Facade;

class BackpackApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'joy-backpack-api';
    }
}
