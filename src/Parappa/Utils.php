<?php
/**
 * A list of tools as trait maethod to include in Parappa working objects
 *
 * @category  Parappa
 * @author    David Buros <david.buros@gmail.com>
 * @copyright 2014 David Buros
 * @licence   WTFPL see LICENCE.md file
 */

namespace Parappa;

trait Utils
{
    /**
     * Encoding type
     *
     * @var array
     */
    protected $encodings = array(
        'UTF-8',
        'UTF-16',
        'UTF-32',
        'ASCII',
        'ISO-8859-1',
        'ISO-8859-2',
        'ISO-8859-3',
        'ISO-8859-4',
        'ISO-8859-5',
        'ISO-8859-6',
        'ISO-8859-7',
        'ISO-8859-8',
        'ISO-8859-9',
        'ISO-8859-10',
        'ISO-8859-13',
        'ISO-8859-14',
        'ISO-8859-15',
        'ISO-8859-16',
        'Windows-1251',
        'Windows-1252',
        'Windows-1254',
    );

    /**
     * Encode any kind of content into an utf-8 string
     *
     * @param string $text Content to encode
     *
     * @return string
     */
    public function encode($text)
    {
        return iconv(
            mb_detect_encoding((string)$text, implode(',', $this->encodings), true),
            "UTF-8",
            (string)$text
        );
    }
}