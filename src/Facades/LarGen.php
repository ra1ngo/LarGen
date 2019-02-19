<?php

namespace Ra1ngo\LarGen\Facades;

use Illuminate\Support\Facades\Facade;

class LarGen extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \Ra1ngo\LarGen\LarGen::class;
    }
}
