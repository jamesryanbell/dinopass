[![Build Status](https://travis-ci.org/jamesryanbell/dinopass.svg?branch=master)](https://travis-ci.org/jamesryanbell/dinopass)
[![Coverage Status](https://coveralls.io/repos/jamesryanbell/dinopass/badge.svg)](https://coveralls.io/r/jamesryanbell/dinopass)
[![Dependency Status](https://www.versioneye.com/user/projects/54b989f0879d51106e000002/badge.svg?style=flat)](https://www.versioneye.com/user/projects/54b989f0879d51106e000002)

[![Latest Stable Version](https://poser.pugx.org/jamesryanbell/dinopass/v/stable.svg)](https://packagist.org/packages/jamesryanbell/dinopass) [![Total Downloads](https://poser.pugx.org/jamesryanbell/dinopass/downloads.svg)](https://packagist.org/packages/jamesryanbell/dinopass) [![Latest Unstable Version](https://poser.pugx.org/jamesryanbell/dinopass/v/unstable.svg)](https://packagist.org/packages/jamesryanbell/dinopass) [![License](https://poser.pugx.org/jamesryanbell/dinopass/license.svg)](https://packagist.org/packages/jamesryanbell/dinopass)

#Dinopass API PHP wrapper

A very simple wrapper for the Dinopass password generator API

##Installation
Installation should be done via composer, details of how to install composer can be found at https://getcomposer.org/

Add `"jamesryanbell/dinopass": "1.0.*@dev"` to your `composer.json` file

Run `composer update` to install the latest version.

##Usage

```php
    use JamesRyanBell\Dinopass\Password;

    $dinopass = new Password();
	echo $dinopass->simple();
```
