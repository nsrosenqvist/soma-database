<?php

namespace NSRosenqvist\Soma\Database;
    
use Illuminate\Database\Capsule\Manager;

class DatabaseManager extends Manager
{
    public static function use($connection = null)
    {
        return static::$instance->getConnection($connection);
    }
}
