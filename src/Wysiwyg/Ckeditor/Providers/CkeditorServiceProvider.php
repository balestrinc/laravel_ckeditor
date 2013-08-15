<?php namespace Wysiwyg\Ckeditor\Providers;

use Illuminate\Support\ServiceProvider;

class CkeditorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('wysiwyg/ckeditor');
		
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		
        $this->app['ckeditor'] = $this->app->share(function($app)
        {
            return new \Wysiwyg\Ckeditor\CKEditor;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('CKEditor', 'Wysiwyg\Ckeditor\Facades\CKEditor');
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('ckeditor');
	}

}