# PhpInfoGuard

PhpInfoGuard is a PHP package to globally protect the `phpinfo()` command, ensuring it can only be executed under certain conditions.

## Installation

You can install the package via composer:

```bash
composer require jumbaeric/phpinfoguard
```

## Configuration
You can set the initial state of phpinfo() in the config/phpinfo_guard.php file:

```php
return [
    'enabled' => false,
];
```

## Usage
To enable or disable the guarded phpinfo():

```php
use PhpInfoGuard\PhpInfoGuard;

PhpInfoGuard::enable();
PhpInfoGuard::guardedPhpInfo(); // Executes phpinfo()

PhpInfoGuard::disable();
PhpInfoGuard::guardedPhpInfo(); // Outputs "phpinfo() is disabled."
```