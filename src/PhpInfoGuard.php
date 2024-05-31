<?php

namespace PhpInfoGuard;

class PhpInfoGuard
{
    protected static $enabled = false;
    
    public static function enable()
    {
        self::$enabled = true;
    }

    public static function disable()
    {
        self::$enabled = false;
    }

    public static function isEnabled()
    {
        return self::$enabled;
    }

    public static function guardedPhpInfo()
    {
        if (self::isEnabled()) {
            phpinfo();
        } else {
            echo "phpinfo() is disabled.";
        }
    }
}
