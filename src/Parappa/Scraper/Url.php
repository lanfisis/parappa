<?php
/**
 * A Guzzle based url scraper
 * See https://github.com/guzzle/guzzle
 *
 * @category  Parappa
 * @package   Parappa_Scraper
 * @author    David Buros <david.buros@gmail.com>
 * @copyright 2014 David Buros
 * @licence   WTFPL see LICENCE.md file
 */
namespace Parappa\Scraper;

use GuzzleHttp\Client;

class Url implements ScraperInterface
{
    /**
     * Returns content from an url using
     *
     * @param string $url Content url
     *
     * @return string
     */
    public function getContent($url)
    {
        return (string)(new Client())->get($url)->getBody();
    }

    /**
     * Returns url host as identifier
     *
     * @param string $url Content url
     *
     * @return string
     */
    public function getIdentifier($url)
    {
        return parse_url($url, PHP_URL_HOST);
    }
}