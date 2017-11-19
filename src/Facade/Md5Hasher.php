<?php

namespace Jarvis\Md5\Facade;

use Illuminate\Support\Facades\Facade;

class Md5Hasher extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jarvis-md5';
    }
}
