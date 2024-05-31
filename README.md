# PhpInfoGuard

PhpInfoGuard is an innovative PHP package designed to enhance security by globally protecting the phpinfo() command. This package ensures that the phpinfo() function can only be executed under controlled conditions, preventing unauthorized access to sensitive PHP configuration details. Ideal for developers and system administrators looking to secure their PHP environments, PhpInfoGuard provides a simple yet powerful solution to a common security concern.

## Installation

To install PhpInfoGuard, use Composer:

```bash
composer require jumbaeric/phpinfoguard
```
Upon installation, the package will automatically update your php.ini file to include the necessary auto_prepend_file directive, streamlining the setup process.

## Features
- Global Protection: Secures the phpinfo() command globally across all PHP scripts and command-line executions.
* Easy Configuration: Simple configuration settings allow you to enable or disable the phpinfo() function as needed.
+ Automated Setup: Automatically configures the auto_prepend_file directive in php.ini for hassle-free integration.
+ Lightweight and Efficient: Minimal performance overhead while providing robust security.

## Configuration
Set the initial state of the phpinfo() function in the config/phpinfo_guard.php file:

```php
return [
    'enabled' => false,
];
```

## Usage
To control the execution of the phpinfo() function, use the following commands:

```php
use PhpInfoGuard\PhpInfoGuard;

PhpInfoGuard::enable(); // Enables phpinfo() execution
PhpInfoGuard::guardedPhpInfo(); // Executes phpinfo() if enabled

PhpInfoGuard::disable(); // Disables phpinfo() execution
PhpInfoGuard::guardedPhpInfo(); // Outputs "phpinfo() is disabled."
```

## Security Benefits

- Prevent Unauthorized Access: Restrict access to PHP configuration details, reducing the risk of exposure to sensitive information.
+ Mitigate Security Risks: Protect against potential attacks that exploit the phpinfo() function to gather server information.

## Keywords and Tags

- PHP Security
- Protect phpinfo()
- Secure PHP Configuration
- PHP Guard
- PHP Info Protection
- PHP Security Package
- Automated PHP Security
- PHP Environment Security
- Global PHP Security

## Conclusion

PhpInfoGuard is an essential tool for any PHP developer or system administrator focused on enhancing the security of their PHP environment. By providing robust protection for the phpinfo() function, this package helps safeguard against unauthorized access and potential security threats. Install PhpInfoGuard today to secure your PHP configurations effectively.