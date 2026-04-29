<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HtmlhelperServiceProvider extends ServiceProvider {
   public function boot()

	   {

	      //

	   }

	public function register()
    {
        foreach (glob(app_path().'/Htmlhelpers/*.php') as $filename){

	            require_once($filename);

	        }
    }
}
