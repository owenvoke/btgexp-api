# btgexp-api

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

An API wrapper for BTGexp.com

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/btgexp-api
```

## Usage

### Basic methods

Initialise the `Basic` class.

```php
$basic = new pxgamer\BTGExp\Basic();
```

Retrieve the current difficulty as a `double`.

```php
$basic->getDifficulty();
```

Retrieve the current connection count as an `integer`.

```php
$basic->getConnectionCount();
```

Retrieve the current block count as an `integer`.

```php
$basic->getBlockCount();
```

Retrieve the block hash for a specified index.

```php
$basic->getBlockHashByIndex(int $index);
```

Retrieve a `Block` instance by hash.

```php
$basic->getBlockByHash(string $hash);
```

Retrieve a transaction as a `string` or a `Transaction` instance.

```php
// As a Transaction instance (default).
$basic->getTransactionById(string $hash, true);
// As an encrypted string.
$basic->getTransactionById(string $hash, false);
```

Retrieve the current network hash rate (hash/s) as a `double`.

```php
$basic->getNetworkHashRate();
```

### Extended methods

Initialise the `Extended` class.

```php
$extended = new pxgamer\BTGExp\Extended();
```

Retrieve the current money supply as a `double`.

```php
$extended->getMoneySupply();
```

Retrieve the current network details as a `Network` instance.

```php
$extended->getNetwork();
```

Retrieve information for an address as an `Address` instance.

```php
$extended->getAddress(string $address);
```

Retrieve the balance for an address as a `double`.

```php
$extended->getBalance(string $address);
```

Retrieve the latest transactions as an array.

```php
$extended->getLastTransactions();
$extended->getLastTransactions(int $count);
$extended->getLastTransactions(int $count, int $min);
```

Retrieve the last 7 blocks as an array.

```php
$extended->getLastBlocks();
```

Retrieve a `Block` instance specified by it's height.

```php
$extended->getBlockByHeight(int $height);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/btgexp-api.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/btgexp-api/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/112339700/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/btgexp-api.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/btgexp-api.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/btgexp-api
[link-travis]: https://travis-ci.org/pxgamer/btgexp-api
[link-styleci]: https://styleci.io/repos/112339700
[link-code-quality]: https://codecov.io/gh/pxgamer/btgexp-api
[link-downloads]: https://packagist.org/packages/pxgamer/btgexp-api
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
