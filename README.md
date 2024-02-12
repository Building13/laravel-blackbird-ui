# A Blade-based component library for Laravel Projects

[![Latest Version on Packagist](https://img.shields.io/packagist/v/building13/laravel-blackbird-ui.svg?style=flat-square)](https://packagist.org/packages/building13/laravel-blackbird-ui)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/building13/laravel-blackbird-ui/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/building13/laravel-blackbird-ui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/building13/laravel-blackbird-ui/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/building13/laravel-blackbird-ui/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/building13/laravel-blackbird-ui.svg?style=flat-square)](https://packagist.org/packages/building13/laravel-blackbird-ui)

This is package is very much WIP.

## Installation

You can install the package via composer:

```bash
composer require building13/laravel-blackbird-ui
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-blackbird-ui-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-blackbird-ui-config"
```

<!-- This is the contents of the published config file:

```php
return [
];
``` -->

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-blackbird-ui-views"
```

## Requirements

This packages includes basic style classes based on TailwindCSS.

Make sure TailwindCSS is installed and make sure to render the tailwind classes in the package views. You can inlude the following in your tailwind.config.js:

```js
content: [
    './vendor/building13/laravel-blackbird-ui/resources/views/**/*.blade.php',`
]
```

While this package is in early development and not on Packagist, add this repo to your composer file.

```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Building13/laravel-blackbird-ui"
        }
    ],
```

You can also clone and develop locally in a Laravel project. To do that, you can update the repositories to the following:
```json
"repositories": [
        {
            "type": "path",
            "url": "../laravel-blackbird-ui"
        },
    ],
```

If you are having issues with Tailwind CSS IntelliSense plugin, try ignoring this path:

```json
{
    "tailwindCSS.files.exclude": [
        "**/testbench-core/**"
    ],
}
```

Tailwind CSS IntelliSense

## Usage

```php
$blackbird = new Building13\Blackbird();
echo $blackbird->echoPhrase('Hello, Building13!');
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

- [Nathan Gross](https://github.com/nathangross)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
