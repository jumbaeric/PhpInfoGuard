<?php
use PhpInfoGuard\PhpInfoGuard;

PhpInfoGuard::enable();
PhpInfoGuard::guardedPhpInfo(); // Executes phpinfo()

PhpInfoGuard::disable();
PhpInfoGuard::guardedPhpInfo(); // Outputs "phpinfo() is disabled."
