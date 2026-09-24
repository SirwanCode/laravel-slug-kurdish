<?php

namespace sirwancode\laravelslugkurdish;

use Illuminate\Support\ServiceProvider;

class KuSlugServiceProvider extends ServiceProvider
{
	protected $defer = false;

	public function boot()
	{
		$this-> publishes([
			            	__DIR__ . '/config.php'   =>  config_path('KuSlug.php'), 
						  ]);
	}

	public function register()
	{
		
		$this->app->bind('KuSlug' , function(){
            return new KuSlug();
        });
       
		$this->mergeConfigFrom(__DIR__ . '/config.php', 'KuSlug');

	}
}