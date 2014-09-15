<?php

namespace Parappa\Test\Scraper;

use PHPUnit_Framework_TestCase;
use Parappa\Scraper\Url;

class UrlTest extends PHPUnit_Framework_TestCase
{
    private $scraper;

    protected function setUp()
    {
        parent::setUp();
        $url = 'http://www.google.com';
        $this->scraper = new Url($url);
    }

    protected function tearDown()
    {
        $this->scraper = null;
        parent::tearDown();
    }

    public function testGetContent()
    {
        $content = $this->scraper->getContent();
        $this->assertContains('<title>Google</title>', $content);
    }

    public function testGetIdentifier()
    {
        $identifier = $this->scraper->getIdentifier();
        $this->assertEquals('www.google.com', $identifier);
    }


    public function testGetContentThrowExceptionIfNoCorrectContent()
    {
        $this->setExpectedException(
            '\Parappa\ParappaException'
        );
       (new Url('http://www.aninexistingdomainname.notld'))->getContent();
    }
}