smsmode-library
===============

[![Build Status](https://travis-ci.org/webeweb/smsmode-library.svg?branch=master)](https://travis-ci.org/webeweb/smsmode-library)
[![Coverage Status](https://coveralls.io/repos/github/webeweb/smsmode-library/badge.svg?branch=master)](https://coveralls.io/github/webeweb/smsmode-library?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webeweb/smsmode-library/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webeweb/smsmode-library/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/webeweb/smsmode-library/v/stable)](https://packagist.org/packages/webeweb/smsmode-library)
[![Latest Unstable Version](https://poser.pugx.org/webeweb/smsmode-library/v/unstable)](https://packagist.org/packages/webeweb/smsmode-library)
[![License](https://poser.pugx.org/webeweb/smsmode-library/license)](https://packagist.org/packages/webeweb/smsmode-library)
[![composer.lock](https://poser.pugx.org/webeweb/smsmode-library/composerlock)](https://packagist.org/packages/webeweb/smsmode-library)

Integrate sMsmode API with your projects.

`sMsmode` provides an API that enables you to easily and automatically send SMS
messages from your applications. This API provides the following functions:

- sending immediate or scheduled SMS messages
- managing SMS replies
- SMS history
- deleting SMS message
- account balance
- creating sub-account
- transferring credits from one account to another one
- adding contact
- getting delivery report
- callback on delivery report update

---

## Compatibility

[![PHP](https://img.shields.io/badge/PHP-%5E5.6%7C%5E7.0-blue.svg)](http://php.net)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/smsmode-library "^2.0"
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

---

## Usage

Read the [documentation](DOCUMENTATION.md).

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/smsmode-library.git
$ cd smsmode-library
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

---

## Todo

- ~~[2 Authentication](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[2 Creating API key](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[3 Sending SMS message](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[4 Delivery report](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[5 Account balance](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[6 Creating sub-account](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[6 Deleting sub-account](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[7 Transferring credits from one account to another](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[8 Adding contacts](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[9 Deleting SMS](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[10 Sent SMS message list](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[11 Checking SMS message status](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[12 Delivery report callback](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[13 Sending SMS message with allowed reply and reply notification](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[14 Retrieving SMS replies](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[15 Sending text-to-speech SMS](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[16 Sending unicode SMS](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~
- ~~[17 Sending SMS in batch mode (attached file)](https://www.smsmode.com/pdf/fiche-HTTP-api-EN.pdf)~~

---

## License

`smsmode-library` is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.

Please note that the sMsmode API is not free for use, see their
[product page](https://www.smsmode.com/tarifs-sms/) for details on pricing.
