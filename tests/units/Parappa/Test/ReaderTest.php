<?php

namespace Parappa\Test;

use PHPUnit_Framework_TestCase;
use Parappa\Reader;
use Parappa\Scraper\Url;

class ReaderTest extends PHPUnit_Framework_TestCase
{
    private $reader;

    protected function setUp()
    {
        parent::setUp();
        $url = 'http://www.google.com';
        $this->reader = new Reader($url, new Url);
    }

    protected function tearDown()
    {
        $this->reader = null;
        parent::tearDown();
    }

//    public function testGetTitle()
//    {
//        $title = $this->reader->getTitle();
//        $this->assertEquals('title', $title);
//    }
//
//    public function testGetBody()
//    {
//        $title = $this->reader->getBody();
//        $this->assertEquals('Lorem ipsum', $title);
//    }

    public function testParseThrowExceptionIfNoCorrectContent()
    {
        $this->setExpectedException(
            '\Parappa\ParappaException'
        );
        new Reader('http://www.aninexistingdomainname.nottld', new Url);
    }
}