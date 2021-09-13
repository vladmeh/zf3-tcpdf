<?php
namespace TCPDFModule\Tests\Factory;

use PHPUnit\Framework\TestCase;
use TCPDFModule\Factory\TCPDFFactory;

class TCPDFFactoryTest extends TestCase
{
    private TCPDFFactory $factory;
    public function setUp(): void
    {
        $this->factory = new TCPDFFactory();
    }
    public function test_it_is_initializable()
    {
        self::assertInstanceOf(TCPDFFactory::class, $this->factory);
    }
}
