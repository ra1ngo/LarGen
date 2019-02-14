<?php

namespace LarGen\Facades;

use Illuminate\Support\Facades\Facade;

class LarGen extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \LarGen\LarGen::class;
    }
}
