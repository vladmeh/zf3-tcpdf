<?php
namespace TCPDFModule\Tests\Factory;

use TCPDFModule\Factory\TCPDFFactory;

class TCPDFFactoryTest extends \PHPUnit_Framework_TestCase
{
    private $factory;
    public function setUp()
    {
        $this->factory = new TCPDFFactory();
    }
    public function test_it_is_initializable()
    {
        self::assertInstanceOf(TCPDFFactory::class, $this->factory);
    }
}