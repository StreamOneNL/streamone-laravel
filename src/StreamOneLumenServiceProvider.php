<?php

namespace StreamOne\Lumen;

use StreamOne\API\v3\Config;
use StreamOne\API\v3\Platform;

class StreamOneLumenServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->app->configure('streamone');

		$path = realpath(__DIR__.'/../config/streamone.php');

		$this->mergeConfigFrom($path, 'streamone');
	}

	public function register()
	{
		$this->app->bind(Platform::class, function ($app) {
			$config = new Config([
				'api_url' => config('streamone.api_url'),
				'authentication_type' => config('streamone.authentication_type'),
				'user_id' => config('streamone.user.id'),
				'user_psk' => config('streamone.user.psk'),
				'application_id' => config('streamone.application.id'),
				'application_psk' => config('streamone.application.psk'),
				'default_account_id' => config('streamone.default_account_id')
				'visible_errors' => config('streamone.visible_errors'),
				'request_factory' => config('streamone.request_factory'),
				'cache' => config('streamone.cache'),
				'request_cache' => config('streamone.request_cache'),
				'token_cache' => config('streamone.token_cache'),
				'use_session_for_token_cache' => config('streamone.use_session_for_token_cache'),
				'session_store' => config('streamone.session_store'),
			]);

			return new Platform($config);
		});
	}
}