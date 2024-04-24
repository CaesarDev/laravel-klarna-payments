# Laravel Klarna Payments

Welcome to the Laravel Klarna Payments package! This package provides seamless integration between your Laravel application and Klarna Payments, allowing you to easily implement Klarna's payment solutions.

## Features

- **Simple Integration**: Easy setup and integration into your Laravel application.
- **Customizable**: Extensive configuration options to tailor Klarna payment features to your needs.
- **Support for Klarna Features**: Supports Klarna's HPP

## Requirements

- PHP >= 7.4
- Laravel >= 8.0

## Installation

You can install the package via composer:

```bash
composer require caesardev/laravel-klarna-payments
```

## Configuration

Publish the configuration file with:

```bash
php artisan vendor:publish --provider="CaesarDev\LaravelKlarnaPayments\KlarnaServiceProvider"
```

After publishing, you can find the configuration file at `config/klarna.php`. Here you can specify your Klarna API credentials and other settings.

## Usage

Here is a basic example of how to use the Laravel Klarna Payments in your project:

```php
use CaesarDev\LaravelKlarnaPayments\KlarnaPayment;

$payment = new KlarnaPayment();

$payment->prepare($orderDetails, $amount);

$payment->create();

$payment->sendToCustomer();
```

## Contributing

Contributions are welcome, and will be fully credited. We accept contributions via Pull Requests on [Github](#).

### Pull Requests

- **Add tests** for new features and bug fixes
- **Document any change** in behaviour - Make sure the `README.md` and any other relevant documentation are kept up-to-date.
- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## Security

If you discover any security related issues, please email security@caesardev.se instead of using the issue tracker.

## License

The Laravel Klarna Payments package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
```