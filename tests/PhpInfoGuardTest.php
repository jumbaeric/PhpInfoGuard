<?php

use PHPUnit\Framework\TestCase;
use PhpInfoGuard\PhpInfoGuard;

class PhpInfoGuardTest extends TestCase
{
    public function testEnable()
    {
        PhpInfoGuard::enable();
        $this->assertTrue(PhpInfoGuard::isEnabled());
    }

    public function testDisable()
    {
        PhpInfoGuard::disable();
        $this->assertFalse(PhpInfoGuard::isEnabled());
    }

    public function testGuardedPhpInfo()
    {
        PhpInfoGuard::disable();
        ob_start();
        PhpInfoGuard::guardedPhpInfo();
        $output = ob_get_clean();
        $this->assertEquals("phpinfo() is disabled.", $output);
        
        PhpInfoGuard::enable();
        ob_start();
        PhpInfoGuard::guardedPhpInfo();
        $output = ob_get_clean();
        $this->assertStringContainsString("phpinfo()", $output);
    }
}
