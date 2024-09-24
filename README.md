# taboola-php-sdk

This is a PHP SDK for Taboola API. It is a simple wrapper around the Taboola API.

## Installation

```bash
composer require taboola/taboola-php-sdk
```

## Usage

```php
use Taboola\Taboola;

$taboola = new Taboola([
    'client_id' => 'YOUR_CLIENT_ID',
    'client_secret' =>'YOUR_CLIENT'
]);

$taboola->get('campaigns');
```

## License

MIT
```