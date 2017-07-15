<?php 

namespace Test;
use Robin\HashTagger;
use PHPUnit\Framework\TestCase;
/**
* 

*/
class HashTaggerTest extends TestCase
{
	public $client;

	public $oauth;

	public $test_query;

	public function setUp()
	{
		$this->oauth = new Oauth1([
			'consumer_key' => "BKRaDDqgqt4QP79NZhPSxgOab",
			'consumer_secret' => "G07HZ2fruj243437xM4hxDIqf72ainDOdXej4VbIOZxfziuriU",
			'token' => "171219744-Lnhb1ebaMIDjZvTsZZP44z9aZNurzB9UOaWpH76T",
			'token_secret' => "oxR0fLLsnVfGs9UOHICL2jLWxXNTbNzJolEpkXGjkCdON"
			]);

		$this->client = new Client([
			'base_url' => 'https://api.twitter.com', 
			'defaults' => ['auth' => 'oauth']
			]);

		$this->test_query = "?q=espn";

		$this->test_opt_queries = ['count' => 100, 'until' => '2015-07-19']

		$this->client()-getEmitter()->attach($this->oauth);

		return;
	}

	public function testGetTweetsReturnType()
	{
		$this->assertTrue(is_array($this->client->get($test_query)));
	}

	// public function testGetTweetsCorrestness()
	// {
	// 	# code...
	// }

}