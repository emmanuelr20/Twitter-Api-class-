<?php

namespace Robin;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class HashTagger 
{
	protected $client;

	protected $oauth;

	protected $stack;

	function __construct($consumer_key, $consumer_secret, $token, $token_secret)
	{
		$this->oauth = new Oauth1([
			'consumer_key' => $consumer_key,
			'consumer_secret' => $consumer_secret,
			'token' => $token,
			'token_secret' => $token_secret
			]);

		$this->stack = HandlerStack::create();
		$this->stack->push($this->oauth);

		$this->client = new Client([
			'base_uri' => 'https://api.twitter.com', 
			'handler' => $this->stack,
			'auth' => 'oauth'
			]);

		return;
	}

	public function getTweets($hash_tag, $optional_queries = null)
	{
		$query_string = '/1.1/search/tweets.json?q=' . $hash_tag;
		if ($optional_queries != null){
			foreach ($variable as $key => $value) {
				$query_string += '&' . $key . '=' . $value;
			}
		}
		$tweets = $this->client->get($query_string);
		return $tweets;
	}
}