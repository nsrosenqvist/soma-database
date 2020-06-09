<?php

namespace NSRosenqvist\Soma\Database\Facades;

class Database extends \Soma\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'database';
    }
}
