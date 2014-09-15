<?php
/**
 * Reader
 *
 * @category  Parappa
 * @author    David Buros <david.buros@gmail.com>
 * @copyright 2014 David Buros
 * @licence   WTFPL see LICENCE.md file
 */

namespace Parappa;

use Parappa\ParappaException as Exception;
use Parappa\Scraper\ScraperInterface as Scraper;

class Reader
{
    use Utils;

    /**
     * Content scrapper
     *
     * @var Parappa\Scraper\ScraperInterface
     */
    protected $scraper;

    /**
     * Resource identifier
     *
     * @var strin
     */
    protected $identifier;

    /**
     * Original content to read as html
     *
     * @var string
     */
    protected $content;

    /**
     * A cleaned version of content
     *
     * @var string
     */
    protected $clean_content;

    /**
     * Content title
     *
     * @var string
     */
    protected $title;

    /**
     * Constructor!
     *
     * @param Scraper $scraper A content scraper
     *
     * @return void
     */
    public function __construct(Scraper $scraper)
    {
        $this->scraper = $scraper;
        $this->scrap()->parse();
    }

    /**
     * Content title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Content body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->content;
    }

    /**
     * Try to retrieve content using scraper
     *
     * @return \Parappa\Reader
     *
     * @throws Exception
     */
    protected function scrap()
    {
        try {
            $this->content = $this->scraper->getContent();
            $this->identifier = $this->scraper->getIdentifier();
            return $this;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Parse content to fill this Reader object
     *
     * @return \Parappa\Reader
     */
    protected function parse()
    {
        $content = $this->encode($this->content);
        $this->clean_content = $content;
        return $this;
    }

}