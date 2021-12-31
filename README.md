# Laravel AdminLTE 3 Scaffold Generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

This package contains some useful code generator for AdminLTE 3.

- [Installation](#installation)
- [Usage](#usage)

## Installation

Require this package with composer using the following command:

```bash
composer require --dev ferdousanam/adminlte3=dev-master --no-cache
```

## Usage

You can publish Admin LTE 3 assets to `public/admin-assets`

```bash
php artisan adminlte:assets
```

To publish layouts scaffold to your [Laravel][laravel] project `resources/views/admin`

```bash
php artisan adminlte:layouts
```

## License

The Laravel IDE Helper Generator is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

[laravel]: https://github.com/laravel/laravel
[ico-version]: https://img.shields.io/packagist/v/ferdousanam/adminlte3.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-gha]: https://github.com/ferdousanam/adminlte3/workflows/Tests/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/ferdousanam/adminlte3.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/ferdousanam/adminlte3
[link-gha]: https://github.com/ferdousanam/adminlte3/actions
[link-downloads]: https://packagist.org/packages/ferdousanam/adminlte3
