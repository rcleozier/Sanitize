# Sanitize -  PHP sanitization built on PHP filter_var

This library was created to provide a clean way of user PHP filter_var sanitization options

## Installation
If you're using Composer to manage dependencies, you can include the following in your composer.json file:

```json
"require": {
    "rcleozier/Sanitize": "~0.1"
}
```
Then, after running `composer update` or `php composer.phar update`, you can
load the class using Composer's autoloading:

```php
require 'vendor/autoload.php';
```

Otherwise, you can simply require the file directly:

```php
require_once 'path/to/Sanitize/Sanitize.php';
```


## Usage

Below are some same usages below

### email()

Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].

```php
Sanitize::email("coder@github.com")
```

### encoded()

URL-encode string, optionally strip or encode special characters.

```php
Sanitize::encoded()
```
## Docs

See all the available options by checking out 
http://php.net/manual/en/filter.filters.sanitize.php

