<?php
/**
 * Enter your API keys below.  You get your API keys by creating an
 * app on https://dev.twitter.com/apps/new.
 */
return array(
	'active' => Fuel::$env,

	'development' => array(
		'tweet_access_token'        => '',
		'tweet_access_token_secret' => '',
		'twitter_consumer_key'      => '',
		'twitter_consumer_secret'   => '',
	),

	'production' => array(
		'tweet_access_token'        => isset($_SERVER['TWEET_ACCESS_TOKEN']) ? $_SERVER['TWEET_ACCESS_TOKEN'] : null,
		'tweet_access_token_secret' => isset($_SERVER['TWEET_ACCESS_TOKEN_SECRET']) ? $_SERVER['TWEET_ACCESS_TOKEN_SECRET'] : null,
		'twitter_consumer_key'      => isset($_SERVER['TWITTER_CONSUMER_KEY']) ? $_SERVER['TWITTER_CONSUMER_KEY'] : null,
		'twitter_consumer_secret'   => isset($_SERVER['TWITTER_CONSUMER_SECRET']) ? $_SERVER['TWITTER_CONSUMER_SECRET'] : null,
	),
);
