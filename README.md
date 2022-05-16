# IXOCREATE Coding Standard

[![PHP Version](https://img.shields.io/packagist/php-v/ixocreate/coding-standard.svg)](https://packagist.org/packages/ixocreate/:package_name)
[![License](https://img.shields.io/github/license/ixocreate/coding-standard.svg)](LICENSE)

## Installation

Install the package via composer:

```sh
composer require ixocreate/coding-standard
```

## Usage

```sh
vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix --config vendor/ixocreate/coding-standard/.php-cs-fixer.php
```

For convenience added as `composer.json` script:

```json
{
    "scripts": {
        "fix-cs": "vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix --config vendor/ixocreate/coding-standard/.php_cs"
    }
}
```

```sh
composer fix-cs
```

## Documentation

Learn more about IXOCREATE by reading its [Documentation](https://ixocreate.github.io/).

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

If you discover security vulnerabilities, please address issues directly to opensource@ixocreate.com via e-mail.

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
