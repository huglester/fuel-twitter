<?php
/**
 * Enter your API keys below.  You get your API keys by creating an
 * app on https://dev.twitter.com/apps/new.
 */
return array(
	'active' => Fuel::$env,

	'development' => array(
		'tweet_access_token'        => '512156830-Qr02kg0vNwUVfSxKPxsm7Rey9zjeWoT2YjlKY3do',
		'tweet_access_token_secret' => 'TxAUpRNhn5MJACVbWSOZKnEgkMcCpOnry8Bfy8fj58',
		'twitter_consumer_key'      => 'UwHYnMWeO0hQdzBLRn85xA',
		'twitter_consumer_secret'   => '1xfXGHaVzOYsaSdERb6qNLpE0l9YAbVfesRcpb8Y8',
	),

	'production' => array(
		'tweet_access_token'        => isset($_SERVER['TWEET_ACCESS_TOKEN']) ? $_SERVER['TWEET_ACCESS_TOKEN'] : null,
		'tweet_access_token_secret' => isset($_SERVER['TWEET_ACCESS_TOKEN_SECRET']) ? $_SERVER['TWEET_ACCESS_TOKEN_SECRET'] : null,
		'twitter_consumer_key'      => isset($_SERVER['TWITTER_CONSUMER_KEY']) ? $_SERVER['TWITTER_CONSUMER_KEY'] : null,
		'twitter_consumer_secret'   => isset($_SERVER['TWITTER_CONSUMER_SECRET']) ? $_SERVER['TWITTER_CONSUMER_SECRET'] : null,
	),
);
