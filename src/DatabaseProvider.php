<?php

namespace NSRosenqvist\Soma\Database;

use Exception;
use Soma\ServiceProvider;
use Psr\Container\ContainerInterface;

use NSRosenqvist\Soma\Database\DatabaseManager;

class DatabaseProvider extends ServiceProvider
{
    public function getFactories() : array
    {
        return [
            'database' => function(ContainerInterface $c) {
                $manager = new DatabaseManager();
                $default = config('database.default', null);

                if ($default = config('database.connections.'.$default, null)) {
                    $manager->addConnection($default);
                }

                foreach (config('database.connections', []) as $name => $connection) {
                    $manager->addConnection($connection, $name);
                }

                // Setup the Eloquent ORM… 
                $manager->setAsGlobal();
                $manager->bootEloquent();

                return $manager;
            },
        ];
    }
}