# Extra methods for the Laravel Str suport class.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/permafrost-dev/laravel-str-extras.svg?style=flat-square)](https://packagist.org/packages/permafrost-dev/laravel-str-extras)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/permafrost-dev/laravel-str-extras/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/permafrost-dev/laravel-str-extras/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/permafrost-dev/laravel-str-extras/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/permafrost-dev/laravel-str-extras/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/permafrost-dev/laravel-str-extras.svg?style=flat-square)](https://packagist.org/packages/permafrost-dev/laravel-str-extras)

Extra helper methods for the Laravel Str helper class.

### Additional Methods

- `insert()` - inserts a string at the specified position in the given string.
- `insertAfterMatch()` - inserts a string after the specified pattern match.
- `insertAfter()` - inserts a string after the specified substring.

### Examples

```php
$new = Str::insert('HelloWorld', '--', 5); //returns 'Hello--World'
$new = Str::insertAfterMatch('HelloWorld', '/(Hello)/', ' '); // returns 'Hello World'
$new = Str::insertAfter('HelloWorld', 'H', '_'); // returns 'H_elloWorld'
```
As far as making building web applications easier - consider the following use case:

```php
// the identifier in the database is UA-1001, but we want to
// allow the user to provide the identifier without a dash for ease of entry:

$providedIdentifier = 'UA1001';
$actualIdentifier = Str::insertAfter($providedIdentifier, 'UA', '-'); 
$userExists = User::where('identifier', $actualIdentifier)->exists();
```

## Installation

You can install the package via composer:

```bash
composer require permafrost-dev/laravel-str-extras
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-str-extras-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-str-extras-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-str-extras-views"
```

## Usage

```php
$laravelStrExtras = new permafrost-dev\LaravelStrExtras();
echo $laravelStrExtras->echoPhrase('Hello, permafrost-dev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Patrick Organ](https://github.com/patinthehat)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
