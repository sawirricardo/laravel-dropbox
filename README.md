[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Niceties to add dropbox as one of your laravel's storage system. Wrapper around [Spatie's flysystem dropbox](https://github.com/spatie/flysystem-dropbox).

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-dropbox.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-dropbox)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-dropbox/run-tests?label=tests)](https://github.com/sawirricardo/laravel-dropbox/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-dropbox/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/laravel-dropbox/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-dropbox.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-dropbox)

Simply use dropbox as storage for your laravel apps.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-dropbox.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-dropbox)

We invest a lot of resources into creating [best in class open source packages](https://github.com/sawirricardo). You can support by donating to

-   [Paypal](https://paypal.me/sawirricardo)
-   BCA 8330123584

I appreciate you if you connect with me on [Twitter](https://twitter.com/RicardoSawir)

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-dropbox
```

You'll need to update your `filesystem.php` to add `dropbox` like so:

```php
return [
    // ...
    'dropbox' => [
        'authorization_token' => env('DROPBOX_AUTHORIZATION_TOKEN', null),
        'case_sensitive' => true,
    ]
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
