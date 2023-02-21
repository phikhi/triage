# Triage

> Data normalization package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/phikhi/triage.svg?style=flat-square)](https://packagist.org/packages/phikhi/triage)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/phikhi/triage/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/phikhi/triage/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/phikhi/triage/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/phikhi/triage/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/phikhi/triage.svg?style=flat-square)](https://packagist.org/packages/phikhi/triage)

Data normalization package for Laravel.

🚧 WIP 🚨 DO NOT USE IN PRODUCTION RIGHT NOW !

## Installation

You can install the package via composer:

```bash
composer require phikhi/triage
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="triage-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$triage = new Phikhi\Triage();

$datas = [
    'ABC' => null,
    'DEF' => 100,
    'GHI' => 200,
    'JKL' => 5,
    'MNO' => -10,
];

$mapping = [
    'ABC' => [
        'from' => [
            'sum' => [
                'DEF',
                'GHI',
                [
                    'sub' => ['JKL', 'MNO'],
                    'move' => true, // default false
                    'preserve' => false // default true
                ]
            ],
            'move' => true, // default false
        ]
    ],
    'DEF' => [
        'from' => [
            ['copy' => ['ABC']]
            ['copy' => ['ABC']]
        ],
        'to' => [1,2],
    ]
    'GHI' => [
        'from' => [
            ['copy' => ['ABC']]
            ['copy' => ['ABC']]
        ],
        'to' => ["amount.raw", "amount.net"],
    ]
];


// could expects
$datas = [
    'ABC' => 315, // (DEF + GHI + (JKL - MNO) ) = (100 + 200 + (5 -(-10)) ) = 315
    'DEF' => [null, 315, 315]
    'GHI' => ["amount" => ["raw" => 315, "net" => 315]],
];
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

- [Philippe Khill](https://github.com/phikhi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
