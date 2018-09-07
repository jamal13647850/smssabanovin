<?php
namespace pgsavis\smssabanovin;
use Illuminate\Support\ServiceProvider;
use pgsavis\smssabanovin\smssabanovin;


/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/2/2018
 * Time: 11:50 PM
 */
class SmssabanovinServiceProvider extends ServiceProvider
{
    public  function register(){
        $this->app->bind('smssabanovin',function(){
            return new smssabanovin();
        });

        $this->mergeConfigFrom(__DIR__.'/Config/main.php','smssabanovin');
    }

    public function boot(\Illuminate\Routing\Router $router){
        require (__DIR__ . '\Http\routes.php');

        $this->loadViewsFrom(__DIR__.'/Views','smssabanovin');


        $this->publishes([
            __DIR__.'/Config/main.php'=>config_path('smssabanovin.php')
        ],'config');

        $this->publishes([
            __DIR__.'/Views' => base_path('resources/views/smssabanovin')
        ],'views');

        $this->publishes([
            __DIR__.'/Migrations' => database_path('/migrations')
        ],'migrations');


    }
}