# SOMA Database

## Installation

```sh
composer require nsrosenqvist/soma-database
```

## Usage

First register the service provider.

**Example configuration:**
```php
<?php return [
    'default' => 'sqlite',
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => get_path('storage').'/database.sqlite',
            'prefix' => '',
            'foreign_key_constraints' => true,
        ],
        'auth' => [
            'driver' => 'sqlite',
            'database' => get_path('storage').'/auth.sqlite',
            'prefix' => '',
            'foreign_key_constraints' => true,
        ],
    ],
];
```

To see how to configure all supported database connections refer to the [Illuminate documentation](https://laravel.com/docs/7.0/database).

## License

MIT