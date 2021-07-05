# Joy BackpackApi

This [Laravel](https://laravel.com/)/[Backpack](https://backpackforlaravel.com/docs/4.1/installation) module adds BackpackApi support to Backpack.

By 🐼 [Ramakant Gangwar](https://github.com/rxcod9).

<!-- [![Screenshot](https://raw.githubusercontent.com/rxcod9/joy-backpack-api/main/cover.jpg)](https://joy-backup.herokuapp.com) -->

[![Latest Version](https://img.shields.io/github/v/release/rxcod9/joy-backpack-api?style=flat-square)](https://github.com/rxcod9/joy-backpack-api/releases)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/rxcod9/joy-backpack-api/run-tests?label=tests)
[![Total Downloads](https://img.shields.io/packagist/dt/joy/backpack-api.svg?style=flat-square)](https://packagist.org/packages/joy/backpack-api)

---

## Prerequisites

*   Composer Installed
*   [Install Laravel](https://laravel.com/docs/installation)
*   [Install Backpack](https://backpackforlaravel.com/docs/4.1/installation)

---

## Installation

```bash
# 1. Require this Package in your fresh Laravel/Backpack project
composer require joy/backpack-api

# 2. Publish
php artisan vendor:publish --provider="Joy\BackpackApi\BackpackApiServiceProvider" --force
```

---

<!-- ## Usage

Installation generates.

--- -->

<!-- ## Views Customization

In order to override views delivered by Backpack DataTable, copy contents from ``vendor/joy/backpack-api/resources/views`` to the ``views/vendor/joy-backpack-api`` directory of your Laravel installation. -->

## Working Example

You can try laravel demo here [https://joy-backup.herokuapp.com/api/documentation](https://joy-backup.herokuapp.com/api/documentation).

## Documentation

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving the joy backpack-api? Feel free to [create an issue on GitHub](https://github.com/rxcod9/joy-backpack-api/issues), we'll try to address it as soon as possible.

If you've found a bug regarding security please mail [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

## Upgrading

Please see [UPGRADING](UPGRADING.md) for details.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Credits

- [Ramakant Gangwar](https://github.com/rxcod9)
- [All Contributors][https://github.com/rxcod9/joy-backpack-api/graphs/contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
