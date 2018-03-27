<?php

use StreamOne\API\v3\NoopCache;
use StreamOne\API\v3\PhpSessionStore;
use StreamOne\API\v3\RequestFactory;

/*
 * This file is part of streamone-lumen.
 *
 * (c) StreamOne
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

	/**
	 * api_url (required): this should be the base URL of the API to use.
	 * 
	 * For example: https://api.streamonecloud.net. 
	 */
	'api_url' => env('STREAMONE_API_URL', 'https://api.streamone.io'),
	
	/**
	 * authentication_type (required): this should be either user or
	 * application and denotes the type of authentication to use.
	 * 
	 * Based on the authentication type, you need to define the auth details
	 * below.
	 */
	'authentication_type' => env('STREAMONE_AUTH_TYPE'),

	'user' => 
	[
		'id'  => env('STREAMONE_USER_ID'),

		'psk' => env('STREAMONE_USER_PSK')
	],

	'application' =>
	[
		'id' => env('STREAMONE_APP_ID'),

		'psk' => env('STREAMONE_APP_PSK')
	],

	/**
	 * default_account_id (optional): this can be set to the ID of an account and if set, this will be the account to use by default for all API actions.
	 */ 
	'default_account_id' => env('STREAMONE_DEFAULT_ACCOUNT_ID'),

	/**
	 * visible_errors (optional, defaults to "2,3,4,5,7"): a list of all
	 * error codes to display prominently. All possible errors are defined
	 * in StreamOne\API\v3\Status.php.
	 */
	'visible_errors' => env('STREAMONE_VISIBLE_ERRORS', '2,3,4,5,7'),

	/**
	 * request_factory: (optional, defaults to ): factory to
	 * use for creating requests. If you want to overwrite it you can pass
	 * an implementation of StreamOne\API\v3\RequestFactoryInterface here.
	 * 
	 */ 
	'request_factory' => env('STREAMONE_REQUEST_FACTORY', RequestFactory::class),

	/**
	 * Note that for request_factory, cache, request_cache, token_cache and session_store you can either pass an instance of an object implementing the required interface or an array of values where the first element should be the full class name (including namespace) and the other arguments will be passed to the constructor of that class.
	 */

	/**
	 * cache (optional, defaults to StreamOne\API\v3\NoopCache): cache to
	 * use for both requests and tokens. Should be an implementation of
	 * StreamOne\API\v3\CacheInterface.
	 */ 
	'cache' => env('STREAMONE_CACHE', NoopCache::class),

	/**
	 * request_cache (optional, defaults to StreamOne\API\v3\NoopCache):
	 * cache to use for requests. Overwrites anything set for cache and
	 * should also be an implementation of StreamOne\API\v3\CacheInterface.
	 */ 
	'request_cache' => env('STREAMONE_REQUEST_CACHE', NoopCache::class),

	/**
	 * token_cache (optional, defaults to StreamOne\API\v3\NoopCache): cache
	 * to use for tokens. Overwrites anything set for cache and should also
	 * be an implementation of StreamOne\API\v3\CacheInterface.
	 */
	'token_cache' => env('STREAMONE_TOKEN_CACHE', NoopCache::class),

	/**
	 * use_session_for_token_cache (optional, defaults to true): if true, the session will be
	 * used to store token information if using a session. Otherwise the token_cache will
	 * always be used.
	 */
	'use_session_for_token_cache' => env('STREAMONE_SESSION_TOKEN_CACHE', true),

	/**
	 * session_store (optional, defaults to StreamOne\API\v3\PhpSessionStore): the session
	 * store to use to store session information and optionally token information (if
	 * use_session_for_token_cache is set to true).
	 */
	'session_store' => env('STREAMONE_SESSION_STORE', PhpSessionStore::class)
];