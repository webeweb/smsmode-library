WBWSMSModeLibrary
====================

[![Build Status](https://travis-ci.org/webeweb/WBWSMSModeLibrary.svg?branch=master)](https://travis-ci.org/webeweb/WBWSMSModeLibrary) [![Coverage Status](https://coveralls.io/repos/github/webeweb/WBWSMSModeLibrary/badge.svg?branch=master)](https://coveralls.io/github/webeweb/WBWSMSModeLibrary?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/smsmode-library/v/stable)](https://packagist.org/packages/webeweb/smsmode-library) [![Latest Unstable Version](https://poser.pugx.org/webeweb/smsmode-library/v/unstable)](https://packagist.org/packages/webeweb/smsmode-library) [![License](https://poser.pugx.org/webeweb/smsmode-library/license)](https://packagist.org/packages/webeweb/smsmode-library) [![composer.lock](https://poser.pugx.org/webeweb/smsmode-library/composerlock)](https://packagist.org/packages/webeweb/smsmode-library) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/78a746c0-f837-4f8f-94c7-32c426d21f65/mini.png)](https://insight.sensiolabs.com/projects/78a746c0-f837-4f8f-94c7-32c426d21f65)

/!\ This package is currently in developpment /!\

---

## Installation

Edit `composer.json` file to add this library package:

```yml
"require": {
    ...
    "webeweb/smsmode-library": "~1.0@dev"
},
```

Run `php composer.phar update webeweb/smsmode-library`

---

## Testing

To test the package, is better to clone this repository on your computer. After, go to the package folder and do
the following (assuming you have `composer` installed on your computer):

```bash
$ composer install --no-interaction --prefer-source --dev
```
Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

---

## License

WBWSMSModeLibrary is released under the LGPL License. See the bundled [LICENSE](LICENSE) file for details.
