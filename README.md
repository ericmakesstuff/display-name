# DisplayName

[![Latest Version](https://img.shields.io/github/release/ericmakesstuff/display-name.svg?style=flat-square)](https://github.com/ericmakesstuff/display-name/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/ericmakesstuff/display-name/master.svg?style=flat-square)](https://travis-ci.org/ericmakesstuff/display-name)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/ericmakesstuff/display-name.svg?style=flat-square)](https://scrutinizer-ci.com/g/ericmakesstuff/display-name/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/ericmakesstuff/display-name.svg?style=flat-square)](https://scrutinizer-ci.com/g/ericmakesstuff/display-name)
[![Total Downloads](https://img.shields.io/packagist/dt/ericmakesstuff/display-name.svg?style=flat-square)](https://packagist.org/packages/ericmakesstuff/display-name)

A simple package to show user's real names in a variety of Web-safe ways, i.e. Eric B. or E B. Also includes a Laravel Facade.

## Install

Via Composer

``` bash
$ composer require ericmakesstuff/display-name
```

## Usage

``` php
$displayName = new EricMakesStuff\DisplayName\DisplayName();
echo $displayName->fullName('John Smith'); // John Smith
echo $displayName->firstName('John Smith'); // John
echo $displayName->firstNameLastInitial('John Smith'); // John S
echo $displayName->firstNameLastInitialWithPeriod('John Smith'); // John S.
echo $displayName->initials('John Smith'); // JS
echo $displayName->initialsWithPeriods('John Smith'); // J.S.
echo $displayName->initialsWithSpaces('John Smith'); // J S
echo $displayName->format('John Smith', 'initials'); // JS
```

## Laravel Facade

Include the Service Provider in config/app.php

```php
'EricMakesStuff\DisplayName\DisplayNameServiceProvider',
```

Include the Facade in config/app.php
```php
'DisplayName' => 'EricMakesStuff\DisplayName\Facades\DisplayName',
```

Use the facade
```php
DisplayName::firstName('John Smith') // John
DisplayName::format('John Smith', 'initials') // JS
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
