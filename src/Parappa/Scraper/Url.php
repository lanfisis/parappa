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
use Parappa\ParappaException as Exception;

class Url implements ScraperInterface
{
    /**
     * Url to read
     *
     * @var string
     */
    protected $url;

    /**
     * Constructor!
     *
     * @param string $url Url to read
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Returns content from an url using GuzzleHttp\Client
     *
     * @return string
     */
    public function getContent()
    {
        try {
            return (string)(new Client())->get($this->url)->getBody();
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Returns url host as identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return parse_url($this->url, PHP_URL_HOST);
    }
}