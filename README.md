opendata-library
================

[![Build Status](https://img.shields.io/travis/com/webeweb/opendata-library/master.svg?style=flat-square)](https://travis-ci.com/webeweb/opendata-library)
[![Coverage Status](https://img.shields.io/coveralls/webeweb/opendata-library/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/opendata-library?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/opendata-library/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/opendata-library/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/opendata-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/opendata-library)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/opendata-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/opendata-library)
[![License](https://img.shields.io/packagist/l/webeweb/opendata-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/opendata-library)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/opendata-library)

Integrate OpenData API with your projects.

> IMPORTANT NOTICE: This package is still under development. Any changes will be
> done without prior notice to consumers of this package. Of course this code
> will become stable at a certain point, but for now, use at your own risk.

---

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/opendata-library.svg?style=flat-square)](http://php.net)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/opendata-library
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

---

## Usage

Read the [documentation](doc/index.md).

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/opendata-library.git
$ cd opendata-library
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

---

## License

`opendata-library` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.
