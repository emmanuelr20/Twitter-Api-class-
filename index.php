<?php

require "vendor/autoload.php";

use Robin\HashTagger;

$hash_tag = new HashTagger(	"BKRaDDqgqt4QP79NZhPSxgOab", 
					"G07HZ2fruj243437xM4hxDIqf72ainDOdXej4VbIOZxfziuriU",
					"171219744-Lnhb1ebaMIDjZvTsZZP44z9aZNurzB9UOaWpH76T",
					"oxR0fLLsnVfGs9UOHICL2jLWxXNTbNzJolEpkXGjkCdON"
				);
$res = $hash_tag->getTweets('espn');

print_r($res);
