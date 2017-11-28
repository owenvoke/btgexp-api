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

``` php
$skeleton = new pxgamer\BTGExp();
echo $skeleton->echoPhrase('Hello, League!');
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
