<?php

require_once __DIR__ . '/vendor/autoload.php';

if (!function_exists('phpinfo')) {
    function phpinfo()
    {
        PhpInfoGuard\PhpInfoGuard::guardedPhpInfo();
    }
}
