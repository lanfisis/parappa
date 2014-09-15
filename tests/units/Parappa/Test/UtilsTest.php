<?php

namespace Parappa\Test;

use PHPUnit_Framework_TestCase;
use Parappa\Reader;
use Parappa\Scraper\Url;

class UtilsTest extends PHPUnit_Framework_TestCase
{
    private $reader;

    protected function setUp()
    {
        parent::setUp();
        $this->reader = new Reader(new Url('http://www.google.com'));
    }

    protected function tearDown()
    {
        $this->reader = null;
        parent::tearDown();
    }

    public function testEncodeEmptyString()
    {
        $string = $this->reader->encode(null);
        $this->assertEquals('', $string);
    }

    public function testEncodeUtf8ToUtf8()
    {
        $string = $this->reader->encode('éàëêîïôö');
        $this->assertTrue(mb_detect_encoding($string, 'UTF-8') === 'UTF-8');
    }

    public function testEncodeUtf8ToUtf8DontAffectContent()
    {
        $string = $this->reader->encode('éàëêîïôö');
        $this->assertEquals('éàëêîïôö', $string);
    }

    public function testEncodeIsoToUtf8()
    {
        $string = $this->reader->encode(iconv('UTF-8', 'ISO-8859-1', 'éàëêîïôö'));
        $this->assertTrue(mb_detect_encoding($string, 'UTF-8') === 'UTF-8');
    }

    public function testEncodeIsoToUtf8DontAffectContent()
    {
        $string = $this->reader->encode(iconv('UTF-8', 'ISO-8859-1', 'éàëêîïôö'));
        $this->assertEquals('éàëêîïôö', $string);
    }
}