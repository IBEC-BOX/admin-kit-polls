<?php

namespace AdminKit\Polls\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Polls\Polls
 */
class Polls extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Polls\Polls::class;
    }
}
