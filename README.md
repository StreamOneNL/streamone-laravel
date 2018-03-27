# [WORK IN PROGRESS]
# StreamOne Laravel & Lumen Package

This is the Laravel & Lumem package that can be used to communicate with the StreamOne Platform by using the StreamOne API version 3.

## Table of contents

* [Installation](#installation)
 * [Using composer](#using-composer)
* [License and copyright](#license-and-copyright)


## Installation

### Using composer

The recommended way to install the SDK is to use [Composer](http://getcomposer.org).
To install, add the following to your `composer.json` file:


```json
{
	"require": {
		"streamone/streamone-laravel": "dev-master"
	}
}
```

Afterwards, you should update the package by running Composer in the directory where the `composer.json` file is located:

```bash
php composer.phar update streamone/streamone-laravel
```

## License and copyright

All source code is licensed under the [MIT License](LICENSE).

Copyright (c) 2014-2017 [StreamOne B.V.](http://streamone.tv)