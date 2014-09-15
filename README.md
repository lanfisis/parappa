![alt text](https://dl.dropboxusercontent.com/u/168077/parappa_the_logo.png )

A reader library to nicely scrape content from the interweb. Largely inspired by [newspaper](https://github.com/codelucas/newspaper)  python library. 

How it works
============

Basically you can use the reader like this:
```php
use Parappa\Reader;
use Parappa\Scraper\Url;

$url = 'http://www.fier-panda.fr/article/apple-decline-et-nesperez-pas-en-tirer-du-cidre';
$reader = new Reader(new Url($url));

echo $reader->getTitle();
echo $reader->getBody();
```

Licence
=======
DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
Read term on LICENCE.md file