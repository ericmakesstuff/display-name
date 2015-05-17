# DisplayName

[![Latest Version](https://img.shields.io/github/release/EricMakesStuff/DisplayName.svg?style=flat-square)](https://github.com/EricMakesStuff/DisplayName/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/EricMakesStuff/DisplayName/master.svg?style=flat-square)](https://travis-ci.org/EricMakesStuff/DisplayName)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/EricMakesStuff/DisplayName.svg?style=flat-square)](https://scrutinizer-ci.com/g/EricMakesStuff/DisplayName/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/EricMakesStuff/DisplayName.svg?style=flat-square)](https://scrutinizer-ci.com/g/EricMakesStuff/DisplayName)
[![Total Downloads](https://img.shields.io/packagist/dt/EricMakesStuff/DispayName.svg?style=flat-square)](https://packagist.org/packages/EricMakesStuff/DisplayName)

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_website``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

A simple package to show user's real names in a variety of Web-safe ways, i.e. Eric B. or E B.

## Install

Via Composer

``` bash
$ composer require EricMakesStuff/DisplayName
```

## Usage

``` php
$displayName = new DisplayName\DisplayName();
echo $displayName->initials('John Smith'); // JS
echo $displayName->format('John Smith', 'initials'); // JS
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email eric at ericmakesstuff dot com instead of using the issue tracker.

## Credits

- [Eric Blount](https://github.com/eblount)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
