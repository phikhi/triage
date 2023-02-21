<?php

namespace Phikhi\Triage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Phikhi\Triage\Triage
 */
class Triage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Phikhi\Triage\Triage::class;
    }
}
