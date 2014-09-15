![alt text](https://dl.dropboxusercontent.com/u/168077/parappa_the_logo.png )

A reader library to nicely scrape content from the interweb. Largely inspired by [newspaper](https://github.com/codelucas/newspaper)  python library. 

[![Build Status](https://travis-ci.org/lanfisis/parappa.svg?branch=master)](https://travis-ci.org/lanfisis/parappa)
[![Build Status](https://scrutinizer-ci.com/g/lanfisis/parappa/badges/build.png?b=master)](https://scrutinizer-ci.com/g/lanfisis/parappa/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lanfisis/parappa/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lanfisis/parappa/?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/54174cf869b273849a00013b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/54174cf869b273849a00013b)

How it works
============

Basically you can use the reader like this:
```php
use Parappa\Reader;
use Parappa\Scraper\Url;

$url = 'http://www.fier-panda.fr/article/le-mouv-brule';
$reader = new Reader(new Url($url));

echo $reader->getTitle(); //LE MOUV' BRÛLE 
echo $reader->getBody(); //Il y a quelques mois, la direction ...
```

Licence
=======
DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
Read term on LICENCE.md file