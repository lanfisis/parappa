<?php
/**
 * Scraper interface
 *
 * @category  Parappa
 * @package   Parappa_Scraper
 * @author    David Buros <david.buros@gmail.com>
 * @copyright 2014 David Buros
 * @licence   WTFPL see LICENCE.md file
 */

namespace Parappa\Scraper;

interface ScraperInterface
{
    /**
     * Read a resource and return raw content
     *
     * @return string
     */
    public function getContent($url);

    /**
     * Returns resource identifier
     *
     * @return string
     */
    public function getIdentifier($url);
}
