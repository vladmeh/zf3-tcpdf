<?php

namespace TCPDFModule\Tests;

use PHPUnit\Framework\TestCase;
use TCPDFModule\Module;

class ModuleTest extends TestCase
{
    public function test_it_returns_config()
    {
        $module = new Module();
        self::assertIsArray($module->getConfig());
    }
}
